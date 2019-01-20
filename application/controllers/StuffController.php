<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 1/8/2019
 * Time: 10:02 AM
 */

class StuffController extends MY_Controller
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

	public function stuff_list_page(){
		$data['title'] = 'Stuff List';
		$data['content'] = 'doctor_stuff/stuff_list';
		$data['stuffs'] = $this->Stuff->_get_all_data();
		$this->load->view('admin_master',$data);
	}


	public function stuff_entry_page(){
		$data['title'] = 'Stuff Info';
		$data['content'] = 'doctor_stuff/stuff_entry';
		$data['code'] = $this->Stuff->_create_code();
		$data['depts'] = $this->Department->_get_all_data();
		$data['degis'] = $this->Designation->_get_all_data();
		$data['stuffs'] = $this->Stuff->_get_all_data();
		$this->load->view('admin_master',$data);
	}

	public function stuff_store(){

		if($this->Stuff->_store()){
			$data['stuffs'] = $this->Stuff->_get_all_data();
			$this->load->view('doctor_stuff/stuff_tbl',$data);
		}else{
			echo 0;
		}
	}

	public function stuff_edit($id = Null){

		if($res = $this->Stuff->_data_by_id($id)){
			$data['stuff'] = $res;
			$data['depts'] = $this->Department->_get_all_data();
			$data['degis'] = $this->Designation->_get_all_data();
			$this->load->view('doctor_stuff/stuff_edit',$data);
		}else{
			$data['warning']="No Data Found";
			$this->message($data);
			redirect('stuff_list');
		}
	}

	public function stuff_update($id = Null){
		$this->form_validation->set_rules('stuff_name', 'Stuff Name ', 'required|trim');
		$this->form_validation->set_rules('stuff_phone', 'Stuff Phone ', 'required|trim');
		$this->form_validation->set_rules('stuff_gender', 'Stuff Gander ', 'required|trim');
		$this->form_validation->set_rules('desg_id', 'Stuff Designation ', 'required|trim');
		$this->form_validation->set_rules('dept_id', 'Stuff Department ', 'required|trim');
		$this->form_validation->set_rules('stuff_address', 'Stuff Address ', 'required|trim');

		if($this->form_validation->run() == FALSE)
		{
			$data['title'] = 'Stuff Info';
			$data['content'] = 'doctor_stuff/stuff_list';
			$data['stuffs'] = $this->Stuff->_get_all_data();
			$this->load->view('admin_master',$data);
		}else{
			if($this->Stuff->_update($id)){
				$data['success']="Update Successful..";
				$this->message($data);
				redirect('stuff_list');
			}else{
				$data['error']="Update Un-successful";
				$this->message($data);
				redirect('stuff_list');
			}
		}
	}

	public function stuff_delete($id = Null){

		if($this->Stuff->_delete($id)){
			$data['success']="Delete Successful..";
			$this->message($data);
			redirect('stuff_list');
		}else{
			$data['error']="Delete Un-successful";
			$this->message($data);
			redirect('stuff_list');
		}
	}
}
