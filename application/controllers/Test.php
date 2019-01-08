<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	
	public function index()
	{
		echo 'test homepage';
		//$this->load->view('welcome_message');
	}


	public function testblog()
	{
		echo 'test blog page';
		
	}

}
