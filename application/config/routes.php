<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['feedback']="panel/feedback";
$route['add_admin']="Admin/add_admin";
$route['panel/remove_pic']="Panel/remove_pic";
$route['gallery_pics']="Panel/gallery_pics";
$route['delete/(:any)']='Panel/delete/$1';
$route['edit/(:any)']='Panel/edit/$1';
$route['create']='Panel/create';
$route['admin/login']='Admin/login';
$route['admin']='Panel/index';
$route['login']='pages/login';
$route['admin/signup']='admin/signup';
$route['admin/subscribe'] = '/Admin/subscribe';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = '/Pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
