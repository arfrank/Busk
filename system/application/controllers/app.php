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
			
		}else{
			redirect('/join');
		}
/*		
		require_once ("/php/OAuth.php");
		require_once ("/php/OAuthConfig.php");

		$key = '';//'<your app's API key>';
		$secret = '';//'<your app's secret>';
		$base_url = "<URL where your app is hosted>";
		$request_token_endpoint = 'http://api.justin.tv/oauth/request_token';
		$authorize_endpoint = 'http://api.justin.tv/oauth/authorize';
		$test_consumer = new OAuthConsumer($key, $secret, NULL);
		//prepare to get request token
		$sig_method = new OAuthSignatureMethod_HMAC_SHA1();
		$parsed = parse_url($request_token_endpoint);
		$params = array(callback => $base_url);
		parse_str($parsed['query'], $params);
		$req_req = OAuthRequest::from_consumer_and_token($test_consumer, NULL, "GET", $request_token_endpoint, $params);
		$req_req->sign_request($sig_method, $test_consumer, NULL);
		$req_token = doHttpRequest ($req_req->to_url());
		//assuming the req token fetch was a success, we should have
		//oauth_token and oauth_token_secret
		parse_str ($req_token,$tokens);
		$oauth_token = $tokens['oauth_token'];
		$oauth_token_secret = $tokens['oauth_token_secret'];
		$callback_url = "$base_url/callback.php?key=$key&token=$oauth_token&token_secret=$oauth_token_secret&endpoint="
		                    . urlencode($authorize_endpoint);
		$auth_url = $authorize_endpoint . "?oauth_token=$oauth_token&oauth_callback=".urlencode($callback_url);

		//Forward us to justin.tv for auth
		Header("Location: $auth_url");
		/**/
		$data['title']="Live Busking Broadcaster";
		$this->load->view('play',$data);
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
//		if($this-)
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */