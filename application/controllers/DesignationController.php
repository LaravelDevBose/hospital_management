<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 1/7/2019
 * Time: 4:45 PM
 */

class DesignationController extends MY_Controller
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

	public function designation_info_page(){
		$data['title'] = 'Designation Info';
		$data['content'] = 'administration/designation_page';
		$data['desis'] = $this->Designation->_get_all_data();
		$data['desg_code'] = $this->Designation->_create_code();
		$this->load->view('admin_master',$data);
	}

	public function designation_store(){

		if($this->Designation->_store()){
			$data['desis'] = $this->Designation->_get_all_data();
			$this->load->view('administration/designation_tbl',$data);
		}else{
			echo 0;
		}
	}

	public function designation_edit($id = Null){

		if($res = $this->Designation->_data_by_id($id)){
			$data['desg'] = $res;
			$this->load->view('administration/designation_edit',$data);
		}else{
			$data['warning']="No Data Found";
			$this->message($data);
			redirect('designation_page');
		}
	}

	public function designation_update($id = Null){
		$this->form_validation->set_rules('desg_name', 'Designation Name ', 'required|trim');

		if($this->form_validation->run() == FALSE)
		{
			$data['title'] = 'Designation Info';
			$data['content'] = 'administration/designation_page';
			$data['desis'] = $this->Designation->_get_all_data();
			$data['desg_code'] = $this->Designation->_create_code();
			$this->load->view('admin_master',$data);
		}else{
			if($this->Designation->_update($id)){
				$data['success']="Update Successful..";
				$this->message($data);
				redirect('designation_page');
			}else{
				$data['error']="Update Un-successful";
				$this->message($data);
				redirect('designation_page');
			}
		}
	}

	public function designation_delete($id = Null){

		if($this->Designation->_delete($id)){
			$data['success']="Delete Successful..";
			$this->message($data);
			redirect('designation_page');
		}else{
			$data['error']="Delete Un-successful";
			$this->message($data);
			redirect('designation_page');
		}
	}
}
