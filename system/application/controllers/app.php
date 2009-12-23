<?php

class App extends Controller {

	function App()
	{
		parent::Controller();	
	}
	
	function faq(){
		$data['title']="Busk.TV FAQ";
		$this->load->view('faq',$data);
	}
	
	function play(){
		$data['title']="Bust.TV Live Busk Recorder";
		$this->load->view('play',$data);
	}
	
	function index()
	{
		$data['title']="Busking Online Live";
		$this->load->view('home',$data);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */