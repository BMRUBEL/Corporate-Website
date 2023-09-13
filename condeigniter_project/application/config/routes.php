<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'welcome';
$route['index'] = 'Welcome/index';

$route['adminpanel'] = 'admin/index';
$route['dashboard'] = 'admin/dashboard';
$route['user-login'] = 'login/signin';
$route['logout'] = 'login/logout';


$route['save-team'] = 'admin/team_insert';
$route['add-team'] = 'admin/team_save';
$route['team-list'] = 'admin/team_list';
$route['team-edit/(:num)'] = 'admin/team_edit/$1';
$route['team-update/(:num)'] = 'admin/team_update/$1';

$route['service-add'] = 'admin/service_insert';
$route['add-service'] = 'admin/service_save';
$route['service-list'] = 'admin/servi';
$route['service-edit/(:num)'] = 'admin/service_edit/$1';
$route['service-update/(:num)'] = 'admin/service_update/$1';

$route['save-whyus'] = 'admin/whyus_insert';
$route['add-whyus'] = 'admin/whyus_save';
$route['whyus-list'] = 'admin/whyus_list';
$route['whyus-edit/(:num)'] = 'admin/whyus_edit/$1';
$route['whyus-update/(:num)'] = 'admin/whyus_update/$1';


$route['save-user'] = 'user/create';
$route['add-user'] = 'user/save';
$route['user-list'] = 'User/user_list';
$route['user-edit/(:num)'] = 'user/edit/$1';
$route['user-update/(:num)'] = 'user/user_update/$1';



$route['contact-list'] = 'admin/contact_list';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
