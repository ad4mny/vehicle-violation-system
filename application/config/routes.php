<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Login_Controller/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'Login_Controller/login';
$route['logout'] = 'Login_Controller/logout';
$route['dashboard'] = 'Dashboard_Controller/index';
$route['sticker'] = 'Sticker_Controller/index';
$route['sticker/(:any)'] = 'Sticker_Controller/index/$1';
$route['sticker/apply/submit'] = 'Sticker_Controller/apply_sticker';
$route['violation'] = 'Violation_Controller/index';
$route['report'] = 'Report_Controller/index';
