<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 1/17/2019
 * Time: 10:02 AM
 */

class BrandController extends MY_Controller
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

	public function brand_info_page(){
		$data['title'] = 'Brand Info';
		$data['content'] = 'administration/brand_page';
		$data['brands'] = $this->Brand->_get_all_data();
		$data['brand_code'] = $this->Brand->_create_code();
		$this->load->view('admin_master',$data);
	}

	public function brand_store(){

		if($this->Brand->_store()){
			$data['brands'] = $this->Brand->_get_all_data();
			$this->load->view('administration/brand_tbl',$data);
		}else{
			echo 0;
		}
	}

	public function brand_edit($id = Null){

		if($res = $this->Brand->_data_by_id($id)){
			$data['brand'] = $res;
			$this->load->view('administration/brand_edit',$data);
		}else{
			$data['warning']="No Data Found";
			$this->message($data);
			redirect('brand_entry');
		}
	}

	public function brand_update($id = Null){
		$this->form_validation->set_rules('brand_name', 'Brand Name ', 'required|trim');

		if($this->form_validation->run() == FALSE)
		{
			$data['title'] = 'Brand Info';
			$data['content'] = 'administration/brand_page';
			$data['brands'] = $this->Brand->_get_all_data();
			$data['brand_code'] = $this->Brand->_create_code();
			$this->load->view('admin_master',$data);
		}else{
			if($this->Brand->_update($id)){
				$data['success']="Update Successful..";
				$this->message($data);
				redirect('brand_entry');
			}else{
				$data['error']="Update Un-successful";
				$this->message($data);
				redirect('brand_entry');
			}
		}
	}

	public function brand_delete($id = Null){

		if($this->Brand->_delete($id)){
			$data['success']="Delete Successful..";
			$this->message($data);
			redirect('brand_entry');
		}else{
			$data['error']="Delete Un-successful";
			$this->message($data);
			redirect('brand_entry');
		}
	}
}
