<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';

/*
!------------------------------------
!    Our Routes
!------------------------------------
*/
$route['login'] 		= 'home';
$route['login_action'] 	= 'home/login_action';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
