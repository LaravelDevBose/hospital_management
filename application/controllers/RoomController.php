<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 12/25/2018
 * Time: 10:57 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class RoomController extends MY_Controller
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


	public function room_entry_page(){

		$data['title'] = 'Room Or Bed Info';
		$data['content'] = 'room/room_page';
		$data['rooms'] = $this->Room->_get_all_data();
		$data['room_id'] = $this->Room->_create_code();
		$this->load->view('admin_master',$data);
	}

	public function room_data_store(){

		if($this->Room->_store()){
			$data['rooms'] = $this->Room->_get_all_data();
			$this->load->view('room/room_tbl', $data);
		}else{
			echo 0;
		}

	}

	public function room_edit_page($id = Null){

		if($res = $this->Room->_data_by_id($id)){
			$data['room'] = $res;
			$this->load->view('room/room_edit', $data);
		}else{
			$data['warning']="No Data Found";
			$this->message($data);
			redirect('room_entry');
		}

	}

	public function room_data_update($id = Null){

		$this->form_validation->set_rules('room_name', 'Room Name', 'required|trim');
		if($this->form_validation->run() == FALSE)
		{
			$data['title'] = 'Room Or Bed Info';
			$data['content'] = 'room/room_page';
			$data['rooms'] = $this->Room->_get_all_data();
			$data['room_id'] = $this->Room->_create_code();
			$this->load->view('admin_master',$data);
		}
		else{
			if($this->Room->_update($id)){
				$data['success']="Update Successful..";
				$this->message($data);
				redirect('room_entry');
			}else{
				$data['error']="Update Un-successful";
				$this->message($data);
				redirect('room_entry');
			}
		}
	}

	public function room_data_delete($id = Null){

		if($this->Room->_delete($id)){
			$data['success']="Delete Successful..";
			$this->message($data);
			redirect('room_entry');
		}else{
			$data['error']="Delete Un-successful";
			$this->message($data);
			redirect('room_entry');
		}
	}
}
