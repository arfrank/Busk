<?php

class App extends Controller {

	function App()
	{
		parent::Controller();	
	}
	
	function faq(){
		$data['title']="Busk.tv FAQ";
		$this->load->view('faq',$data);
	}
	
	function login(){
		
	}
	
	function index()
	{
		$data['title']="Busking Online Live";
		$this->load->view('home',$data);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */