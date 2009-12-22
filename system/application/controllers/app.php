<?php

class App extends Controller {

	function App()
	{
		parent::Controller();	
	}
	
	function login(){
		
	}
	
	function index()
	{
		$this->load->view('home');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */