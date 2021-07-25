<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Login_Controller/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'Login_Controller/login';
$route['register'] = 'Login_Controller/index/register';
$route['register/submit'] = 'Login_Controller/registration';
$route['logout'] = 'Login_Controller/logout';
$route['dashboard'] = 'Dashboard_Controller/index';
$route['sticker'] = 'Sticker_Controller/index';
$route['sticker/(:any)'] = 'Sticker_Controller/index/$1';
$route['sticker/(:any)/(:num)'] = 'Sticker_Controller/index/$1/$2';
$route['sticker/apply/submit'] = 'Sticker_Controller/apply_sticker';
$route['sticker/apply/update'] = 'Sticker_Controller/update_sticker';
$route['sticker/apply/delete/(:num)'] = 'Sticker_Controller/delete_sticker/$1';
$route['violation'] = 'Violation_Controller/index';
$route['report'] = 'Report_Controller/index';
