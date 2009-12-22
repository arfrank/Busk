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
		$data['title']="Busking Online Live";
		$this->load->view('home',$data);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */