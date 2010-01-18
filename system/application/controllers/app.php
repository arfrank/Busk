<?php

class App extends Controller {

	function App()
	{
		parent::Controller();	
	}
	
	function faq(){
		$data['title']="FAQ";
		$this->load->view('faq',$data);
	}
	
	function play(){
		if($this->session->userdata('user_id')){
			//get oauth stuff
		}else{
			redirect('/join');
		}
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Stage Name', 'required|trim');
		$this->form_validation->set_rules('paypal_email', 'Donation Email Address', 'required|trim');
		$this->form_validation->set_rules('website', 'Website URL', 'required|trim');
		if ($this->form_validation->run() == FALSE){
			require_once ("/Users/aaronfrank/Sites/busk/php/OAuth.php");
			require_once ("/Users/aaronfrank/Sites/busk/php/OAuthConfig.php");
			$key = '';//'<your app's API key>';
			$secret = '';//'<your app's secret>';
			$request_token_endpoint = 'http://api.justin.tv/oauth/request_token';
			$oauth_access_token_endpoint = 'http://api.justin.tv/oauth/access_token';
			$authorize_endpoint = 'http://api.justin.tv/oauth/authorize';
			$test_consumer = new OAuthConsumer($key, $secret, NULL);
			//prepare to get request token
			$sig_method = new OAuthSignatureMethod_HMAC_SHA1();
			$parsed = parse_url($request_token_endpoint);
			$req_req = OAuthRequest::from_consumer_and_token($test_consumer, NULL, "GET", $request_token_endpoint);
			$req_req->sign_request($sig_method, $test_consumer, NULL);
			$req_token = doHttpRequest ($req_req->to_url());
			//assuming the req token fetch was a success, we should have
			//oauth_token and oauth_token_secret
			parse_str ($req_token,$tokens);
			$oauth_token = $tokens['oauth_token'];
			$oauth_token_secret = $tokens['oauth_token_secret'];

			$consumer = $test_consumer;// new OAuthConsumer($oauth_token, $oauth_token_secret, NULL);
			$auth_token = new OAuthConsumer($oauth_token, $oauth_token_secret);
			$access_token_req = new OAuthRequest("GET", $oauth_access_token_endpoint);
			$access_token_req = $access_token_req->from_consumer_and_token($test_consumer,
			                $auth_token, "GET", $oauth_access_token_endpoint);
			$access_token_req->sign_request(new OAuthSignatureMethod_HMAC_SHA1(),$consumer,$auth_token);
			$after_access_request = doHttpRequest($access_token_req->to_url());
			$access_tokens=$tokens;
			$access_token = new OAuthConsumer($access_tokens['oauth_token'], $access_tokens['oauth_token_secret']);

			$streamkey_req = $access_token_req->from_consumer_and_token($consumer,
			                $access_token, "GET", "http://api.justin.tv/api/stream/new_stream_key/busktv.xml");

			$streamkey_req->sign_request(new OAuthSignatureMethod_HMAC_SHA1(),$consumer,$access_token);

			$xml = doHttpRequest($streamkey_req->to_url());		
			$xml_parser = xml_parser_create();
		    xml_parse_into_struct($xml_parser, $xml, $vals, $index);
			$data['stream_key']=$vals[0]['value'];
			$view_name='play_form';
		}else{
			$data['stream_key']=$this->input->post('stream_key');
			$view_name='play';
		}
		$data['title']="Broadcast";
		$this->load->view($view_name,$data);
	}
	
	function parseStream_KeyFromXML($xml)
	{
	    $xml_parser = xml_parser_create();

	    xml_parse_into_struct($xml_parser, $xml, $vals, $index);
	    xml_parser_free($xml_parser);

	    if ($vals[1]['tag'] == "STREAM_KEY")
	        return $vals[1]['value'];
	    else
	        return '';
	}
	
	function index()
	{
		$data['title']="Live Busking Online";
		$this->load->view('home',$data);
	}
	
	function join(){
		$data['title']="Join/Login";
		$this->load->view('join',$data);
	}

	function login(){
		$this->session->set_userdata('user_id',4);
		redirect('/');
	}
	
	function register(){
		$this->session->set_userdata('user_id',4);
		redirect('/');
		
	}
	
	function logout(){
		$this->session->unset_userdata('user_id');
		redirect('/play');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */