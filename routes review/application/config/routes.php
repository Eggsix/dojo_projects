<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "products";
$route['404_override'] = '';
$route['p/edit/(:any)'] = 'products/edit/$1';
$route['p/(:any)'] = 'products/show/$1';
$route['register'] = 'users/new_user';
$route['login'] = 'sessions/new_session';
$route['logoff'] = 'sessions/destroy';

/* End of file routes.php */
/* Location: ./application/config/routes.php */