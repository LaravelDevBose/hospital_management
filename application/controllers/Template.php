<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MY_Controller {


	public function dashboard_page(){
		$data['title'] = 'Dashboard';
		$data['content'] = 'dashboard/home_page';
		$this->load->view('admin_master', $data);
	}


	public function admission_dashboard(){
		$data['title'] = 'Administrator';
		$data['content'] = 'admission/admission_dashboard';
		$this->load->view('admin_master', $data);
	}

	public function admission_entry_page()
	{
		$data['title'] = 'Admission Entry';
		$data['content'] = 'admission/admission_entry_page';
		$this->load->view('admin_master', $data);
	}

	public  function patient_list(){
		$data['title'] = 'Patient List';
		$data['content'] = 'admission/patient_list_page';
		$this->load->view('admin_master',$data);
	}

	public function release_entry_page(){
		$data['title'] = 'Release Entry';
		$data['content'] = 'admission/release_entry_page';
		$this->load->view('admin_master',$data);
	}

	public function transfer_entry_page(){
		$data['title'] = 'Transfer Entry';
		$data['content'] = 'admission/transfer_entry_page';
		$this->load->view('admin_master',$data);
	}

	public function bed_allocation_page(){
		$data['title'] = 'Bed Entry';
		$data['content'] = 'admission/bed_entry_page';
		$this->load->view('admin_master',$data);
	}

	public function discharge_entry_page(){
		$data['title'] = 'Discharge Entry';
		$data['content'] = 'admission/discharge_entry_page';
		$this->load->view('admin_master',$data);
	}


	public function pharmacy_dashboard(){

	}


	public function sales_entry_page(){

		$data['title'] = 'Sales Entry';
		$data['content'] = 'pharmacy/sales_entry_page';
		$this->load->view('admin_master',$data);
	}

	public function purchase_entry_page(){

		$data['title'] = 'Purchase Entry';
		$data['content'] = 'pharmacy/purchase_entry_page';
		$this->load->view('admin_master',$data);
	}

	public function stock_search_page(){

		$data['title'] = 'Product Stock';
		$data['content'] = 'pharmacy/stock_page';
		$this->load->view('admin_master',$data);
	}

	public function sales_return_page(){

		$data['title'] = 'Sale Return';
		$data['content'] = 'pharmacy/sale_return';
		$this->load->view('admin_master',$data);
	}

	public function purchase_return_page(){
		$data['title'] = 'Purchase Return';
		$data['content'] = 'pharmacy/purchase_return';
		$this->load->view('admin_master',$data);
	}

	public function sales_record_page(){
		$data['title'] = 'Sale Record';
		$data['content'] = 'pharmacy/sale_record';
		$this->load->view('admin_master',$data);
	}

	public function purchase_record_page(){
		$data['title'] = 'Purchase Record';
		$data['content'] = 'pharmacy/purchase_record';
		$this->load->view('admin_master',$data);
	}

	public function supplier_page(){
		$data['title'] = 'Discharge Entry';
		$data['content'] = 'pharmacy/discharge_entry_page';
		$this->load->view('admin_master',$data);
	}

	public function medicine_entry_page(){
		$data['title'] = 'Medicine Entry';
		$data['content'] = 'pharmacy/medicine_entry_page';
		$this->load->view('admin_master',$data);
	}

	public function doctor_staff_dashboard (){

	}

	public function doctor_entry_page(){
		$data['title'] = 'Doctor Entry';
		$data['content'] = 'doctor_stuff/doctor_entry';
		$this->load->view('admin_master',$data);
	}

	public function stuff_entry_page(){
		$data['title'] = 'Stuff Entry';
		$data['content'] = 'doctor_stuff/stuff_entry';
		$this->load->view('admin_master',$data);
	}

	public function doctor_list_page(){
		$data['title'] = 'Doctor List';
		$data['content'] = 'doctor_stuff/doctor_list';
		$this->load->view('admin_master',$data);
	}

	public function stuff_list_page(){
		$data['title'] = 'Stuff List';
		$data['content'] = 'doctor_stuff/stuff_list';
		$this->load->view('admin_master',$data);
	}

	public function salary_payment_page(){
		$data['title'] = 'Salary Payment';
		$data['content'] = 'doctor_stuff/salary_payment';
		$this->load->view('admin_master',$data);
	}

	public function schedule_entry_page(){
		$data['title'] = 'Operation Schedule';
		$data['content'] = 'operation/operation_schedule';
		$this->load->view('admin_master',$data);
	}

	public function schedule_list_page(){
		$data['title'] = 'Operation Schedule List';
		$data['content'] = 'operation/schedule_list';
		$this->load->view('admin_master',$data);
	}

	public function operation_theater_entry(){
		$data['title'] = 'Operation Theater Entry';
		$data['content'] = 'operation/theater_entry';
		$this->load->view('admin_master',$data);
	}

	public function expense_entry_page(){
		$data['title'] = 'Expense Entry';
		$data['content'] = 'account/expense_entry';
		$this->load->view('admin_master',$data);
	}

	public function patient_bill_entry(){
		$data['title'] = 'Patient Bill Entry';
		$data['content'] = 'account/patient_bill_entry';
		$this->load->view('admin_master',$data);
	}

	public function patient_bill_collection(){
		$data['title'] = 'Patient Bill Collection';
		$data['content'] = 'account/bill_collection';
		$this->load->view('admin_master',$data);
	}

	public function patient_test_entry_page(){
		$data['title'] = 'Patient Test Entry';
		$data['content'] = 'lab/patient_test_entry';
		$this->load->view('admin_master',$data);
	}

	public function test_report_delivery_page(){
		$data['title'] = 'Patient Test Delivery';
		$data['content'] = 'lab/test_delivery';
		$this->load->view('admin_master',$data);
	}

	public function test_report_create(){
		$data['title'] = 'Test Report Create';
		$data['content'] = 'lab/test_report_make';
		$this->load->view('admin_master',$data);
	}

	public function department_info_page(){
		$data['title'] = 'Department Info';
		$data['content'] = 'administration/department_page';
		$this->load->view('admin_master',$data);
	}

	public function designation_info_page(){
		$data['title'] = 'Designation Info';
		$data['content'] = 'administration/designation_page';
		$this->load->view('admin_master',$data);
	}

	public function expense_head_info_page(){
		$data['title'] = 'Expense Head Info';
		$data['content'] = 'administration/expense_head_page';
		$this->load->view('admin_master',$data);
	}

	public function salary_month_entry_page(){
		$data['title'] = 'Salary Month Info';
		$data['content'] = 'administration/salary_month';
		$this->load->view('admin_master',$data);
	}

	public function test_report_template_entry(){
		$data['title'] = 'Test Report Template';
		$data['content'] = 'administration/test_report_template';
		$this->load->view('admin_master',$data);
	}

	public function category_entry_page(){
		$data['title'] = 'Category Info';
		$data['content'] = 'administration/category_page';
		$this->load->view('admin_master',$data);
	}

	public function brand_entry_page(){
		$data['title'] = 'Brand Info';
		$data['content'] = 'administration/brand_page';
		$this->load->view('admin_master',$data);
	}

	public function unit_entry_page(){
		$data['title'] = 'Unit Info';
		$data['content'] = 'administration/unit_page';
		$this->load->view('admin_master',$data);
	}

	public function room_entry_page(){
		$data['title'] = 'Room Or Bed Info';
		$data['content'] = 'administration/room_page';
		$this->load->view('admin_master',$data);
	}
}
