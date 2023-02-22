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

$route['default_controller'] = 'home'; // TODO หน้าแรก /controllers/Home.php
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;

// TODO Route หา controller addition (ส่วนเสริมืั้สร้างเพิ่มขึ้นมา)
$route['home']	= "addition/addition_controller/home";
// $route['addition/login']	= "addition/addition_controller/login"; // ? หน้า Login ไม่ใช้แล้ว
$route['addition/staff_list']	= "addition/addition_controller/staff_list";
$route['addition/reset_password']	= "addition/addition_controller/reset_password";
$route['addition/teacher_list_inout']	= "addition/addition_controller/teacher_list_inout";
$route['addition/advisor_report']	= "addition/addition_controller/advisor_report";

$route['addition/reset/(:num)']	= "reset_password/reset_password_function/$1";

$route['about']	= "home/about";
$route['contact']	= "home/contact";
$route['help']	= "home/help";