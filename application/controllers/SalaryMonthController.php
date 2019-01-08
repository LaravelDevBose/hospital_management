<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 1/7/2019
 * Time: 12:07 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class SalaryMonthController extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->Admin->is_admin_logged_in())
		{
			redirect('/');
		}
	}

	public function index()
	{
		if (!$this->Admin->is_admin_logged_in())
		{
			redirect('/');
		}else{
			redirect('dashboard');
		}
	}

	public function salary_month_entry(){
		$data['title'] = 'Salary Month Info';
		$data['content'] = 'salaryMonth/salary_month_page';
		$data['months'] = $this->SalaryMonth->_get_all_data();
		$this->load->view('admin_master',$data);
	}

	public function salary_month_store(){

		if($this->SalaryMonth->_store()){
			$data['months'] = $this->SalaryMonth->_get_all_data();
			$this->load->view('salaryMonth/salary_month_tbl',$data);
		}else{
			echo 0;
		}
	}

	public function salary_month_edit($id = Null){

		if($res = $this->SalaryMonth->_data_by_id($id)){
			$data['month'] = $res;
			$this->load->view('salaryMonth/salary_month_edit',$data);
		}else{
			$data['warning']="No Data Found";
			$this->message($data);
			redirect('salary_month_entry');
		}
	}

	public function  salary_month_update($id = Null){

		$this->form_validation->set_rules('month_name', 'Month Name ', 'required|trim');
		$this->form_validation->set_rules('year', 'Year', 'required|trim');
//		$this->form_validation->set_rules('agent_phone', 'Contact Number ', 'required|trim');


		if($this->form_validation->run() == FALSE)
		{
			$data['title'] = 'Salary Month Info';
			$data['content'] = 'salaryMonth/salary_month_page';
			$data['months'] = $this->SalaryMonth->_get_all_data();
			$this->load->view('admin_master',$data);
		}else{
			if($this->SalaryMonth->_update($id)){
				$data['success']="Update Successful..";
				$this->message($data);
				redirect('salary_month_entry');
			}else{
				$data['error']="Update Un-successful";
				$this->message($data);
				redirect('salary_month_entry');
			}
		}

	}

	public function  salary_month_delete($id = Null){
		if($this->SalaryMonth->_delete($id)){
			$data['success']="Delete Successful..";
			$this->message($data);
			redirect('salary_month_entry');
		}else{
			$data['error']="Delete Un-successful";
			$this->message($data);
			redirect('salary_month_entry');
		}
	}
}
