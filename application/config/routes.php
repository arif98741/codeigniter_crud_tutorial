<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'test';

/*
!------------------------------------
!    Our Routes
!------------------------------------
*/

$route['home'] = 'welcome/home';
$route['model_work'] = 'welcome/model_work';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
