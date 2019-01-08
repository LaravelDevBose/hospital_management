<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 1/8/2019
 * Time: 10:02 AM
 */

class DepartmentController extends MY_Controller
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

	public function department_info_page(){
		$data['title'] = 'Department Info';
		$data['content'] = 'administration/department_page';
		$data['departments'] = $this->Department->_get_all_data();
		$data['dept_code'] = $this->Department->_create_code();
		$this->load->view('admin_master',$data);
	}

	public function department_store(){

		if($this->Department->_store()){
			$data['departments'] = $this->Department->_get_all_data();
			$this->load->view('administration/department_tbl',$data);
		}else{
			echo 0;
		}
	}

	public function department_edit($id = Null){

		if($res = $this->Department->_data_by_id($id)){
			$data['department'] = $res;
			$this->load->view('administration/department_edit',$data);
		}else{
			$data['warning']="No Data Found";
			$this->message($data);
			redirect('department_page');
		}
	}

	public function department_update($id = Null){
		$this->form_validation->set_rules('dept_name', 'Department Name ', 'required|trim');

		if($this->form_validation->run() == FALSE)
		{
			$data['title'] = 'Department Info';
			$data['content'] = 'administration/department_page';
			$data['departments'] = $this->Department->_get_all_data();
			$data['dept_code'] = $this->Department->_create_code();
			$this->load->view('admin_master',$data);
		}else{
			if($this->Department->_update($id)){
				$data['success']="Update Successful..";
				$this->message($data);
				redirect('department_page');
			}else{
				$data['error']="Update Un-successful";
				$this->message($data);
				redirect('department_page');
			}
		}
	}

	public function department_delete($id = Null){

		if($this->Department->_delete($id)){
			$data['success']="Delete Successful..";
			$this->message($data);
			redirect('department_page');
		}else{
			$data['error']="Delete Un-successful";
			$this->message($data);
			redirect('department_page');
		}
	}
}
