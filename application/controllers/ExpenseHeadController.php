<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 1/7/2019
 * Time: 2:59 PM
 */

class ExpenseHeadController extends MY_Controller
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

	public function expense_head_page(){
		$data['title'] = 'Expense Head Info';
		$data['content'] = 'administration/expense_head_page';
		$data['heads'] = $this->ExpenseHead->_get_all_data();
		$data['eh_code'] = $this->ExpenseHead->_create_code();
		$this->load->view('admin_master',$data);
	}

	public function expense_head_store(){

		if($this->ExpenseHead->_store()){
			$data['heads'] = $this->ExpenseHead->_get_all_data();
			$this->load->view('administration/expense_head_tbl',$data);
		}else{
			echo 0;
		}
	}

	public function expense_head_edit($id = Null){

		if($res = $this->ExpenseHead->_data_by_id($id)){
			$data['head'] = $res;
			$this->load->view('administration/expense_head_edit',$data);
		}else{
			$data['warning']="No Data Found";
			$this->message($data);
			redirect('expense_head');
		}
	}

	public function expense_head_update($id = Null){
		$this->form_validation->set_rules('eh_name', 'Head Name ', 'required|trim');

		if($this->form_validation->run() == FALSE)
		{
			$data['title'] = 'Expense Head Info';
			$data['content'] = 'administration/expense_head_page';
			$data['heads'] = $this->ExpenseHead->_get_all_data();
			$data['eh_code'] = $this->ExpenseHead->_create_code();
			$this->load->view('admin_master',$data);
		}else{
			if($this->ExpenseHead->_update($id)){
				$data['success']="Update Successful..";
				$this->message($data);
				redirect('expense_head');
			}else{
				$data['error']="Update Un-successful";
				$this->message($data);
				redirect('expense_head');
			}
		}
	}

	public function expense_head_delete($id = Null){

		if($this->ExpenseHead->_delete($id)){
			$data['success']="Delete Successful..";
			$this->message($data);
			redirect('expense_head');
		}else{
			$data['error']="Delete Un-successful";
			$this->message($data);
			redirect('expense_head');
		}
	}
}
