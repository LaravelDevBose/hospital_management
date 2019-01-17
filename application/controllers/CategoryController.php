<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 1/8/2019
 * Time: 10:02 AM
 */

class CategoryController extends MY_Controller
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

	public function category_info_page(){
		$data['title'] = 'Category Info';
		$data['content'] = 'administration/category_page';
		$data['categorys'] = $this->Category->_get_all_data();
		$data['cat_code'] = $this->Category->_create_code();
		$this->load->view('admin_master',$data);
	}

	public function category_store(){

		if($this->Category->_store()){
			$data['categorys'] = $this->Category->_get_all_data();
			$this->load->view('administration/category_tbl',$data);
		}else{
			echo 0;
		}
	}

	public function category_edit($id = Null){

		if($res = $this->Category->_data_by_id($id)){
			$data['category'] = $res;
			$this->load->view('administration/category_edit',$data);
		}else{
			$data['warning']="No Data Found";
			$this->message($data);
			redirect('category_entry');
		}
	}

	public function category_update($id = Null){
		$this->form_validation->set_rules('cat_name', 'Category Name ', 'required|trim');

		if($this->form_validation->run() == FALSE)
		{
			$data['title'] = 'Category Info';
			$data['content'] = 'administration/category_page';
			$data['categorys'] = $this->Category->_get_all_data();
			$data['cat_code'] = $this->Category->_create_code();
			$this->load->view('admin_master',$data);
		}else{
			if($this->Category->_update($id)){
				$data['success']="Update Successful..";
				$this->message($data);
				redirect('category_entry');
			}else{
				$data['error']="Update Un-successful";
				$this->message($data);
				redirect('category_entry');
			}
		}
	}

	public function category_delete($id = Null){

		if($this->Category->_delete($id)){
			$data['success']="Delete Successful..";
			$this->message($data);
			redirect('category_entry');
		}else{
			$data['error']="Delete Un-successful";
			$this->message($data);
			redirect('category_entry');
		}
	}
}
