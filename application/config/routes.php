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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'HomeController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* Authentication */
$route['login'] = 'AuthController/login';
$route['disabled'] = 'AuthController/register';
$route['logout'] = 'AuthController/logout';

/* Admin Control Panel */
$route['admin'] = 'AdminController/index';
$route['admin/seekers'] = 'SeekerController/index';
$route['admin/seekers/edit/(:num)'] = 'SeekerController/edit/$1';
$route['admin/seekers/delete/(:num)'] = 'SeekerController/delete/$1';
$route['admin/seekers/detail/potrait/(:num)'] = 'SeekerController/detailPotrait/$1';
$route['admin/seekers/detail/landscape/(:num)'] = 'SeekerController/detailLandscape/$1';
$route['admin/seekers/detail/potrait/print/(:num)'] = 'SeekerController/detailPrint/$1';
$route['admin/vacancies'] = 'VacancyController/index';
$route['admin/vacancies/add'] = 'VacancyController/add';
$route['admin/vacancies/change-image'] = 'VacancyController/changeImage';
$route['admin/vacancies/detail/(:num)'] = 'VacancyController/detail/$1';
$route['admin/vacancies/edit/(:num)'] = 'VacancyController/edit/$1';
$route['admin/vacancies/delete/(:num)'] = 'VacancyController/delete/$1';
$route['admin/users'] = 'UserController/index';
$route['admin/users/add'] = 'UserController/add';
$route['admin/users/edit/(:num)'] = 'UserController/edit/$1';
$route['admin/users/delete/(:num)'] = 'UserController/delete/$1';
$route['admin/profile'] = 'UserController/profile';
$route['admin/settings'] = 'UserController/setting';

/* Home Page */
$route['vacancies'] = 'HomeController/vacancies';
$route['contact'] = 'HomeController/contact';
$route['register'] = 'HomeController/register';
$route['success'] = 'HomeController/success';
$route['vacancies/(:num)'] = 'HomeController/vacancy/$1';
