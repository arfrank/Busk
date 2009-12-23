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
		$data['title']="Live Busking Broadcaster";
		$this->load->view('play',$data);
	}
	
	function index()
	{
		$data['title']="Live Busking Online";
		$this->load->view('home',$data);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */