<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'LoginController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['/'] 			=	'LoginController/index';
$route['admin_login'] 	= 	'LoginController/admin_login_submit';
$route['admin_logout'] 	= 	'LoginController/admin_logout_submit';

$route['admin_profile']	=	'AdminController/admin_profile_page';
$route['admin_profile_update']	=	'AdminController/admin_profile_update';
$route['password_change']	=	'AdminController/admin_password_change';


$route['dashboard']				=	'DashboardController/index';


$route['admission_entry']		=	'Template/admission_entry_page';
$route['patient_list']			=	'Template/patient_list';
$route['release_entry']			=	'Template/release_entry_page';
$route['transfer_entry']		=	'Template/transfer_entry_page';
$route['bed_allocation']		=	'Template/bed_allocation_page';
$route['discharge_entry']		=	'Template/discharge_entry_page';

$route['sales_entry']			= 'Template/sales_entry_page';
$route['purchase_entry']		= 'Template/purchase_entry_page';
$route['stock']					= 'Template/stock_search_page';
$route['sales_return']			= 'Template/sales_return_page';
$route['purchase_return']		= 'Template/purchase_return_page';
$route['sales_record']			= 'Template/sales_record_page';
$route['purchase_record']		= 'Template/purchase_record_page';
$route['supplier']				= 'Template/supplier_page';
$route['medicine_entry']		= 'Template/medicine_entry_page';


$route['doctor_entry']			=	'Template/doctor_entry_page';
$route['stuff_entry']			=	'Template/stuff_entry_page';
$route['doctor_list']			=	'Template/doctor_list_page';
$route['stuff_list']			=	'Template/stuff_list_page';
$route['salary_payment']		=	'Template/salary_payment_page';

$route['operation_schedule_entry'] 	= 'Template/schedule_entry_page';
$route['operation_schedule_list'] 	= 'Template/schedule_list_page';
$route['theater_entry'] 			= 'Template/operation_theater_entry';


$route['expense_entry'] 			= 'Template/expense_entry_page';
$route['bill_entry'] 				= 'Template/patient_bill_entry';
$route['bill_collection'] 			= 'Template/patient_bill_collection';

$route['patient_test_entry'] 		= 'Template/patient_test_entry_page';
$route['test_report_delivery'] 		= 'Template/test_report_delivery_page';
$route['test_report_create'] 		= 'Template/test_report_create';



$route['category_entry']		=	'Template/category_entry_page';
$route['brand_entry']			=	'Template/brand_entry_page';
$route['unit_entry']			=	'Template/unit_entry_page';

$route['department_page'] 			=	'DepartmentController/department_info_page';
$route['department_store'] 			=	'DepartmentController/department_store';
$route['department_edit/(:any)'] 	=	'DepartmentController/department_edit/$1';
$route['department_update/(:any)'] 	=	'DepartmentController/department_update/$1';
$route['department_delete/(:any)'] 	=	'DepartmentController/department_delete/$1';


$route['designation_page'] 				=	'DesignationController/designation_info_page';
$route['designation_store'] 			=	'DesignationController/designation_store';
$route['designation_edit/(:any)'] 		=	'DesignationController/designation_edit/$1';
$route['designation_update/(:any)'] 	=	'DesignationController/designation_update/$1';
$route['designation_delete/(:any)'] 	=	'DesignationController/designation_delete/$1';


$route['expense_head']					=	'ExpenseHeadController/expense_head_page';
$route['expense_head_store']			=	'ExpenseHeadController/expense_head_store';
$route['expense_head_edit/(:any)']		=	'ExpenseHeadController/expense_head_edit/$1';
$route['expense_head_update/(:any)']	=	'ExpenseHeadController/expense_head_update/$1';
$route['expense_head_delete/(:any)']	=	'ExpenseHeadController/expense_head_delete/$1';


$route['salary_month_entry']			=	'SalaryMonthController/salary_month_entry';
$route['salary_month_store']			=	'SalaryMonthController/salary_month_store';
$route['salary_month_edit/(:any)']		=	'SalaryMonthController/salary_month_edit/$1';
$route['salary_month_update/(:any)']	=	'SalaryMonthController/salary_month_update/$1';
$route['salary_month_delete/(:any)']	=	'SalaryMonthController/salary_month_delete/$1';

$route['test_entry']			=	'TestController/test_entry_page';
$route['test_store']			=	'TestController/test_data_store';
$route['test_edit/(:any)']		=	'TestController/test_edit_page/$1';
$route['test_update/(:any)']	=	'TestController/test_data_update/$1';
$route['test_delete/(:any)']	=	'TestController/test_data_delete/$1';


$route['test_template_list']			=	'TemplateController/test_template_list';
$route['test_template_entry']			=	'TemplateController/test_template_entry';
$route['test_template_insert']			=	'TemplateController/test_template_store';
$route['test_template_preview/(:any)']	=	'TemplateController/test_template_view/$1';
$route['test_template_edit/(:any)']		=	'TemplateController/test_template_edit/$1';
$route['test_template_update/(:any)']	=	'TemplateController/test_template_update/$1';
$route['test_template_delete/(:any)']	=	'TemplateController/test_template_delete/$1';



$route['room_entry']			=	'RoomController/room_entry_page';
$route['room_store']			=	'RoomController/room_data_store';
$route['room_edit/(:any)']		=	'RoomController/room_edit_page/$1';
$route['room_update/(:any)']	=	'RoomController/room_data_update/$1';
$route['room_delete/(:any)']	=	'RoomController/room_data_delete/$1';
