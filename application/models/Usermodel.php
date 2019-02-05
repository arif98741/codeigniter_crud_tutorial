<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php 

	class Usermodel extends CI_Model
	{
	    public function __construct()
	    {
	    	parent::__construct();
	    	$this->db = $this->load->database('default',TRUE); 
	    	
	    }

	    public function get_data()
	    {
	    	//$this->db->order_by('userid','desc');
	    	//$this->db->limit(1);
	    	$data =  $this->db->order_by('userid','desc')->limit(1)->get('users');
	    	echo '<pre>';
	    	print_r($data->result_object());
	    }
	}
?>