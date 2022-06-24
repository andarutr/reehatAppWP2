<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'reehat';
// Auth
$route['auth/login/pengurus'] = 'auth/login_admin';
$route['auth/login/pengurus-backend'] = 'auth/login_admin';
$route['auth/login/pengguna'] = 'auth/login_user';
$route['auth/register/pengguna'] = 'auth/register_user';
$route['auth/logout'] = 'auth/logout';

// Admin
$route['admin/my-profile'] = 'admin/my_profile';
$route['admin/my-profile-backend'] = 'admin/my_profile';
$route['admin/ganti-password'] = 'admin/change_password';
$route['admin/webinar/create'] = 'admin/webinar_create';
$route['admin/webinar/create-backend'] = 'admin/webinar_create';
$route['admin/webinar/edit/(:num)'] = 'admin/webinar_edit/$1';
$route['admin/webinar/edit-backend/(:num)'] = 'admin/webinar_edit/$1';
$route['admin/webinar/delete/(:num)'] = 'admin/webinar_delete/$1';
$route['admin/artikel/create'] = 'admin/artikel_create';
$route['admin/artikel/create-backend'] = 'admin/artikel_create';
$route['admin/artikel/edit/(:num)'] = 'admin/artikel_edit/$1';
$route['admin/artikel/edit-backend/(:num)'] = 'admin/artikel_edit/$1';
$route['admin/artikel/delete/(:num)'] = 'admin/artikel_delete/$1';
$route['admin/pembayaran/delete/(:num)'] = 'admin/payment_delete/$1';

// User
$route['user/my-profile'] = 'user/my_profile';
$route['user/time-management'] = 'user/time_management';
$route['user/time-management/create'] = 'user/time_management_create';
$route['user/time-management/(:any)'] = 'user/time_management_list';
$route['user/pembayaran/(:any)'] = 'user/payment';
$route['user/webinar/(:any)'] = 'user/webinar_detail';
$route['user/artikel/(:any)'] = 'user/artikel_detail';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
