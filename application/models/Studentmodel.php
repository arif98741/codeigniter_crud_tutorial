<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php 

	class Studentmodel extends CI_Model
	{
	    public function __construct()
	    {
	    	parent::__construct();
	    	
	    }

	    public function test_method()
	    {
	    	echo 'yes';
	    }
	}
?>