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
$route['default_controller'] = 'home';
$route['login'] = 'login';
$route['register'] = 'login/register';
$route['wallet'] = 'login/wallet';
$route['logout'] = 'login/logout';


/////Activity
$route['activity'] = 'user/Activity';
$route['create'] = 'user/Activity/create';
$route['activity/(:num)'] = 'user/Activity/single/$1';
$route['sale/create/(:num)'] = 'user/Activity/create_sale/$1';
$route['browse/detail/(:num)'] = 'home/single_sale_public/$1';


$route['sale/biddings/(:num)'] = 'user/Activity/biddings_history/$1';
////Profile  
$route['profile'] = 'user/Profile/profile';
$route['profile/(:num)'] = 'user/Profile/other_profile/$1';
//Searc

$route['search'] = 'Home/search';

/////Admin URL

//
$route['admin/categories'] = 'admin/home/categories';
$route['admin/users'] = 'admin/home/users';
$route['admin/nfts/sales'] = 'admin/home/nft_sales';
$route['admin/nfts/sales/(:num)'] = 'admin/home/sale_single/$1';
$route['admin/nft/pending'] = 'admin/home/for_approved';
$route['admin/settings'] = 'admin/home/settings';


///Extra urls
$route['404_override'] = 'welcome/no_found';
$route['translate_uri_dashes'] = FALSE;
