<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller{ 

	public function __construct()
    {
        parent::__construct();
        $this->load->model('studentmodel');
        
    }

    public function model_work()
    {
    	$this->studentmodel->test_method();
    }

    
	
}
