<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php 

	class Testmodel extends CI_Model
	{
	   
	    public function __construct()
	    {
	        parent::__construct();
	    }

	    public function abc()
	    {
	    	echo "I am from abc method";
	    }

	    public function def()
	    {
	    	echo "I am from def method";
	    }

	    
	}
?>