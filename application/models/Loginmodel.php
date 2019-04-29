<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php 

	class Loginmodel extends CI_Model
	{
	    public function __construct()
	    {
	    	parent::__construct();
	    	$this->db = $this->load->database('default',TRUE); 
	    	
	    }

	    /*
		!---------------------------------
		! Login Method 
		!---------------------------------
		*/ 
	    public function loginmethod($username,$password)
	    {
	    	$this->db->where(array(
	    		'username' => $username,
	    		'password' => md5($password)
	    	));
	    	$data =  $this->db->get('users');
	    	return $data;	
	    }
	}
?>