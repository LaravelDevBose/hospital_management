<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 1/6/2019
 * Time: 5:47 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class TestController extends MY_Controller
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

	public function test_entry_page()
	{
		$data['title'] = 'Test Entry';
		$data['content'] = 'test/test_entry_page';
		$data['test_id'] = $this->Test->_create_code();
		$data['tests'] = $this->Test->_get_all_data();
		$this->load->view('admin_master', $data);
	}


	public function test_data_store(){

		if($this->Test->_store()){
			$data['tests'] = $this->Test->_get_all_data();
			$this->load->view('test/test_tbl', $data);
		}else{
			echo 0;
		}
	}

	public function test_edit_page($id = Null){

		if($res = $this->Test->_data_by_id($id)){
			$data['test'] = $res;
			$this->load->view('test/test_edit_page', $data);
		}else{
			$data['warning']="No Data Found";
			$this->message($data);
			redirect('test_entry');
		}
	}

	public function test_data_update($id = Null){

		if($this->Test->_update($id)){

			$data['success']="Update Successful..";
			$this->message($data);
			redirect('test_entry');

		}else{

			$data['error']="Update Un-Successful..";
			$this->message($data);
			redirect('test_entry');
		}
	}

	public function test_data_delete($id = Null){

		if($this->Test->_delete($id)){

			$data['success']="Delete Successful..";
			$this->message($data);
			redirect('test_entry');

		}else{

			$data['error']="Delete Un-Successful..";
			$this->message($data);
			redirect('test_entry');
		}
	}

}
