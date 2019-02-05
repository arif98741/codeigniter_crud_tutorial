<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php 

	class Studentmodel extends CI_Model
	{
	    public function __construct()
	    {
	    	parent::__construct();
	    	$this->db = $this->load->database('default',TRUE); 
	    	
	    }

	    public function test_method()
	    {
	    	$data = $this->db->get('something');
	    	echo '<pre>';
	    	print_r($data->result_array()); 
	    }
	}
?>