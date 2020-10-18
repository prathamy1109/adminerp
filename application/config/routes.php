<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Home */
//$route['admin-panel'] = 'front_desk/Visitor_book/index';
/* Home */

/* Master start. */

/* Category start. */

$route['category'] = 'masters/Category/index';
$route['category/(:any)'] = 'masters/Category/index/(:any)';
$route['add-edit-category'] = 'masters/Category/addEdit';
$route['delete-category'] = 'masters/Category/delete';

/* Category end. */



$route['add-religion'] = 'masters/Religion';
/* Master end. */

/* Front Desk start. */
$route['visitor-book'] = 'front_desk/Visitor_book/index';
$route['admission-enquiry'] = 'front_desk/Admission_enquiry/index';
$route['courier-dispatch'] = 'front_desk/courier_dispatch/index';
$route['courier-receive'] = 'front_desk/courier_receive/index';
$route['phonecall_book'] = 'front_desk/phonecall_book/index';
/* Front Desk end. */

/* Student_Registration start */
//$route['admin-panel'] = 'front_desk/Visitor_book/index';
/* Student_Registration end */

/* Expenses start */
$route['expenses'] = 'expenses/Expenses';
/* Expenses end */

/* Attendance start */
//$route['admin-panel'] = 'front_desk/Visitor_book/index';
/* Attendance end */

/* SMS start */
//$route['admin-panel'] = 'front_desk/Visitor_book/index';
/* SMS end */

/* HR start */
//$route['admin-panel'] = 'front_desk/Visitor_book/index';
/* HR end */

/* Leave start */
$route['leave'] = 'leave/Leave';
/* Leave end */

/* Library start */
$route['library'] = 'library/Library';
/* Library end */

/* Hostel start */
$route['stationary'] = 'stationary/Stationary';
/* Hostel end */

/* Hostel start */
$route['hostel'] = 'hostel/Hostel';
/* Hostel end */

$route['default_controller'] = 'Dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
