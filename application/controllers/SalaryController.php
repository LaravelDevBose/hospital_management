<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 1/8/2019
 * Time: 10:02 AM
 */

class SalaryController extends MY_Controller
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

	public function salary_payment(){
		$data['title'] = 'Salary Info';
		$data['content'] = 'doctor_stuff/salary_payment';
		$data['code'] = $this->Salary->_create_code();
		
		$data['salaries'] = $this->Salary->_get_all_data();
		$this->load->view('admin_master',$data);
	}

	public function salary_payment_store(){

		if($this->Salary->_store()){
			$data['salaries'] = $this->Salary->_get_all_data();
			$this->load->view('doctor_stuff/salary_tbl',$data);
		}else{
			echo 0;
		}
	}

	public function salary_payment_edit($id = Null){

		if($res = $this->Salary->_data_by_id($id)){
			$data['salary'] = $res;
			
			$this->load->view('doctor_stuff/salary_edit',$data);
		}else{
			$data['warning']="No Data Found";
			$this->message($data);
			redirect('salary_payment');
		}
	}

	public function salary_payment_update($id = Null){
		$this->form_validation->set_rules('doc_name', 'Doctor Name ', 'required|trim');
		$this->form_validation->set_rules('doc_phone', 'Doctor Phone ', 'required|trim');
		$this->form_validation->set_rules('doc_gender', 'Doctor Gander ', 'required|trim');
		$this->form_validation->set_rules('desg_id', 'Doctor Designation ', 'required|trim');
		$this->form_validation->set_rules('dept_id', 'Doctor Department ', 'required|trim');
		$this->form_validation->set_rules('doc_address', 'Doctor Address ', 'required|trim');

		if($this->form_validation->run() == FALSE)
		{
			$data['title'] = 'Salary Info';
			$data['content'] = 'doctor_stuff/salary_payment';
			$data['salaries'] = $this->Salary->_get_all_data();
			$this->load->view('admin_master',$data);
		}else{
			if($this->Salary->_update($id)){
				$data['success']="Update Successful..";
				$this->message($data);
				redirect('salary_payment');
			}else{
				$data['error']="Update Un-successful";
				$this->message($data);
				redirect('salary_payment');
			}
		}
	}

	public function salary_payment_delete($id = Null){

		if($this->Salary->_delete($id)){
			$data['success']="Delete Successful..";
			$this->message($data);
			redirect('salary_payment');
		}else{
			$data['error']="Delete Un-successful";
			$this->message($data);
			redirect('salary_payment');
		}
	}
}
