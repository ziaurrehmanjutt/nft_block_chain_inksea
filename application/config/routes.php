<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------

|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['login'] = 'login';
$route['register'] = 'login/register';
$route['wallet'] = 'login/wallet';
$route['logout'] = 'login/logout';
$route['forget_password'] = 'login/forget_password';
$route['linkedin_redirect'] = 'login/linkedin_redirect';


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
$route['admin/sale/waiting'] = 'admin/home/payment_waiting';
$route['admin/sale/waiting/(:num)'] = 'admin/home/payment_waiting_single/$1';


///Extra urls
$route['404_override'] = 'welcome/no_found';
$route['translate_uri_dashes'] = FALSE;
