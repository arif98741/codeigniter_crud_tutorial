<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'test';

/*
!------------------------------------
!    Our Routes
!------------------------------------
*/

$route['home'] = 'welcome/home';
$route['data_work'] = 'welcome/data';
$route['session_work'] = 'welcome/session_method';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
