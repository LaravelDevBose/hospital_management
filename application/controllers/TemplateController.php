<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 1/6/2019
 * Time: 3:20 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class TemplateController extends MY_Controller
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

	public function test_template_list(){
		$data['title'] = 'Test Template List';
		$data['content'] = 'report_template/test_template_list';
		$data['templates'] = $this->ReportTemplate->_get_all_data();
		$this->load->view('admin_master',$data);
	}
	public function test_template_entry(){
		$data['title'] = 'Test Template Entry';
		$data['content'] = 'report_template/test_report_template';
		$data['tests'] = $this->Test->_get_all_data();
		$this->load->view('admin_master',$data);
	}

	public function test_template_store(){

		$this->form_validation->set_rules('test_id', 'Test Name ', 'required|trim');

		if($this->form_validation->run() == FALSE)
		{
			$data['title'] = 'Test Template Entry';
			$data['content'] = 'report_template/test_report_template';
			$data['tests'] = $this->Test->_get_all_data();
			$this->load->view('admin_master',$data);
		}
		else{
			if($this->ReportTemplate->_store()){
				$data['success']="Save Successfully!";
				$this->message($data);
				redirect('test_template_entry');

			}else{
				$data['error']="Save Unsuccessful..!";
				$this->message($data);
				redirect('test_template_entry');
			}
		}
	}

	public function test_template_view($id = Null){

		if($res = $this->ReportTemplate->_data_by_id($id)){
			$data['title'] = 'Test Template view';
			$data['content'] = 'report_template/report_template_view';
			$data['template'] = $res;
			$this->load->view('admin_master', $data);
		}else{
			$data['warning'] = 'No Data Found';
			$this->message($data);
			return redirect('test_template_list');
		}

	}

	public function test_template_edit($id = Null){
		if($res = $this->ReportTemplate->_data_by_id($id)){
			$data['title'] = 'Test Template Edit';
			$data['content'] = 'report_template/report_template_edit';
			$data['tests'] = $this->Test->_get_all_data();
			$data['template'] = $res;
			$this->load->view('admin_master', $data);
		}else{
			$data['warning'] = 'No Data Found';
			$this->message($data);
			return redirect('test_template_list');
		}
	}

	public function test_template_update($id = Null){
		$this->form_validation->set_rules('test_id', 'Test Name ', 'required|trim');

		if($this->form_validation->run() == FALSE)
		{
			$data['title'] = 'Test Template Edit';
			$data['content'] = 'report_template/report_template_edit';
			$data['tests'] = $this->Test->_get_all_data();
			$data['template'] = $this->ReportTemplate->_data_by_id($id);
			$this->load->view('admin_master', $data);
		}else{
			if($this->ReportTemplate->_update($id)){
				$data['success']="Update Successfully!";
				$this->message($data);
				redirect('test_template_list');

			}else{
				$data['error']="Update Unsuccessful..!";
				$this->message($data);
				redirect('test_template_list');
			}
		}
	}

	public function test_template_delete($id = Null){

		if($this->ReportTemplate->_delete($id)){
			$data['success']="Delete Successfully!";
			$this->message($data);
			redirect('test_template_list');

		}else{
			$data['error']="Delete Unsuccessful..!";
			$this->message($data);
			redirect('test_template_list');
		}
	}
}
