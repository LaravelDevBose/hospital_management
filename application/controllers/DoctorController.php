<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 1/8/2019
 * Time: 10:02 AM
 */

class DoctorController extends MY_Controller
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

	public function doctor_list_page(){
		$data['title'] = 'Doctor List';
		$data['content'] = 'doctor_stuff/doctor_list';
		$data['doctors'] = $this->Doctor->_get_all_data();
		$this->load->view('admin_master',$data);
	}


	public function doctor_entry_page(){
		$data['title'] = 'Doctor Info';
		$data['content'] = 'doctor_stuff/doctor_entry';
		$data['code'] = $this->Doctor->_create_code();
		$data['depts'] = $this->Department->_get_all_data();
		$data['degis'] = $this->Designation->_get_all_data();
		$data['doctors'] = $this->Doctor->_get_all_data();
		$this->load->view('admin_master',$data);
	}

	public function doctor_store(){

		if($this->Doctor->_store()){
			$data['doctors'] = $this->Doctor->_get_all_data();
			$this->load->view('doctor_stuff/doctor_tbl',$data);
		}else{
			echo 0;
		}
	}

	public function doctor_edit($id = Null){

		if($res = $this->Doctor->_data_by_id($id)){
			$data['doctor'] = $res;
			$data['depts'] = $this->Department->_get_all_data();
			$data['degis'] = $this->Designation->_get_all_data();
			$this->load->view('doctor_stuff/doctor_edit',$data);
		}else{
			$data['warning']="No Data Found";
			$this->message($data);
			redirect('doctor_list');
		}
	}

	public function doctor_update($id = Null){
		$this->form_validation->set_rules('doc_name', 'Doctor Name ', 'required|trim');
		$this->form_validation->set_rules('doc_phone', 'Doctor Phone ', 'required|trim');
		$this->form_validation->set_rules('doc_gender', 'Doctor Gander ', 'required|trim');
		$this->form_validation->set_rules('desg_id', 'Doctor Designation ', 'required|trim');
		$this->form_validation->set_rules('dept_id', 'Doctor Department ', 'required|trim');
		$this->form_validation->set_rules('doc_address', 'Doctor Address ', 'required|trim');

		if($this->form_validation->run() == FALSE)
		{
			$data['title'] = 'Doctor Info';
			$data['content'] = 'doctor_stuff/doctor_list';
			$data['doctors'] = $this->Doctor->_get_all_data();
			$this->load->view('admin_master',$data);
		}else{
			if($this->Doctor->_update($id)){
				$data['success']="Update Successful..";
				$this->message($data);
				redirect('doctor_list');
			}else{
				$data['error']="Update Un-successful";
				$this->message($data);
				redirect('doctor_list');
			}
		}
	}

	public function doctor_delete($id = Null){

		if($this->Doctor->_delete($id)){
			$data['success']="Delete Successful..";
			$this->message($data);
			redirect('doctor_list');
		}else{
			$data['error']="Delete Un-successful";
			$this->message($data);
			redirect('doctor_list');
		}
	}
}
