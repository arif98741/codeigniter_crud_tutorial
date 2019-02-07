<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller{ 

	public function __construct()
    {
        parent::__construct();
        $this->load->model('studentmodel');
        $this->load->model('usermodel');
                
    }

    public function session_method()
    {

        echo base_url(); die;
        /*$this->session->set_userdata(array(

            'userid' => 1,
            'token'   => 'fghjdfd45678dfdsf'
        ));*/

        ///$this->session->sess_destroy();

        //echo $this->session->useriddfddsfsd; die;
       
        
        echo "<pre>";
        print_r($this->session); 
    }

    
	
}
