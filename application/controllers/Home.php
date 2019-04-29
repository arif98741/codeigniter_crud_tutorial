<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default',TRUE);
	}

	public function index()
	{
		$this->load->view('project/login.php');
	}

	/*
	!---------------------------------
	! Login Action Method
	!---------------------------------
	*/ 
	public function login_action()
	{
		//echo "<pre>";
		//print_r($_POST);
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		

		$this->load->model('loginmodel');
		$logindata = $this->loginmodel->loginmethod($username,$password);
		$row = $logindata->result_id->num_rows;
		if ($row > 0) {
			echo "success";
		}else{
			echo 'failed';
		}

	}

	
}
