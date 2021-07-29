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

$route['admin/(:any)'] = 'Admin_Controller/index/$1';
$route['admin/users/delete/(:num)'] = 'Admin_Controller/delete_user/$1';
$route['admin/applications/(:num)'] = 'Admin_Controller/view_application_by_id/$1';
$route['admin/applications/search'] = 'Admin_Controller/search_application';
$route['admin/applications/approve/(:num)'] = 'Admin_Controller/approve_application/$1';
$route['admin/applications/reject/(:num)'] = 'Admin_Controller/reject_application/$1';
$route['admin/violations/search'] = 'Admin_Controller/search_violation';
$route['admin/violations/pay/(:num)'] = 'Admin_Controller/pay_violation/$1';
$route['admin/violations/remove/(:num)'] = 'Admin_Controller/remove_violation/$1';
