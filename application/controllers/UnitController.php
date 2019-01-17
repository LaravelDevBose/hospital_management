<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 1/8/2019
 * Time: 10:02 AM
 */

class UnitController extends MY_Controller
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

	public function unit_info_page(){
		$data['title'] = 'Unit Info';
		$data['content'] = 'administration/unit_page';
		$data['units'] = $this->Unit->_get_all_data();
		$this->load->view('admin_master',$data);
	}

	public function unit_store(){

		if($this->Unit->_store()){
			$data['units'] = $this->Unit->_get_all_data();
			$this->load->view('administration/unit_tbl',$data);
		}else{
			echo 0;
		}
	}

	public function unit_edit($id = Null){

		if($res = $this->Unit->_data_by_id($id)){
			$data['unit'] = $res;
			$this->load->view('administration/unit_edit',$data);
		}else{
			$data['warning']="No Data Found";
			$this->message($data);
			redirect('unit_entry');
		}
	}

	public function unit_update($id = Null){
		$this->form_validation->set_rules('unit_name', 'Unit Name ', 'required|trim');

		if($this->form_validation->run() == FALSE)
		{
			$data['title'] = 'Unit Info';
			$data['content'] = 'administration/unit_page';
			$data['units'] = $this->Unit->_get_all_data();
			$this->load->view('admin_master',$data);
		}else{
			if($this->Unit->_update($id)){
				$data['success']="Update Successful..";
				$this->message($data);
				redirect('unit_entry');
			}else{
				$data['error']="Update Un-successful";
				$this->message($data);
				redirect('unit_entry');
			}
		}
	}

	public function unit_delete($id = Null){

		if($this->Unit->_delete($id)){
			$data['success']="Delete Successful..";
			$this->message($data);
			redirect('unit_entry');
		}else{
			$data['error']="Delete Un-successful";
			$this->message($data);
			redirect('unit_entry');
		}
	}
}
