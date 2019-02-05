<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller{ 

	public function __construct()
    {
        parent::__construct();
        $this->load->model('studentmodel');
        $this->load->model('usermodel');
        
        
    }

    public function data()
    {

    	$this->usermodel->get_data();
    }

    
	
}
