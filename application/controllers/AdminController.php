<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 12/22/2018
 * Time: 12:51 PM
 */

class AdminController extends MY_Controller
{
	/*==========Admin Login Check=============*/
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

	/*=========== Admin Profile page ================*/
	public function admin_profile_page(){
		$data['title'] = 'Admin Profile';
		$data['content'] = 'admin/admin_profile';
		$data['profile'] = $this->Admin->get_single_admin_data($this->session->userdata('id'));
		$this->load->view('admin_master', $data);
	}

	/*========== Admin profile Update =========== */

	public function admin_profile_update(){

		$this->form_validation->set_rules('crnt_password', 'Current Password', 'required|trim|min_length[6]');

		if($this->form_validation->run() == FALSE){
			$data['title'] = 'Admin Profile';
			$data['content'] = 'admin/admin_profile';
			$data['profile'] = $this->Admin->get_single_admin_data($this->session->userdata('id'));
			$this->load->view('admin_master', $data);
		}else{

			if(!$this->Admin->check_admin_password()){
				$data['error'] ='Your Current Password not match';
				$this->session->set_flashdata($data);

				return redirect('admin_profile');
			}

			if($this->Admin->profile_update($this->session->userdata('id'))){

				$data['success'] ='Profile Info updated Successfully';
				$this->session->set_flashdata($data);

				return redirect('admin_profile');

			}else{
				$data['error'] ='Profile Info Not updated';
				$this->session->set_flashdata($data);

				return redirect('admin_profile');
			}
		}
	}

	/*========== change admin password ============*/
	public function admin_password_change(){
		$this->form_validation->set_rules('crnt_password', 'Current Password', 'required|trim|min_length[6]');
		$this->form_validation->set_rules('password', 'New Password', 'required|trim|min_length[6]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|trim|min_length[6]|matches[password]');

		if($this->form_validation->run() == FALSE){
			$data['title'] = 'Admin Profile';
			$data['content'] = 'admin/admin_profile';
			$data['profile'] = $this->Admin->get_single_admin_data($this->session->userdata('id'));
			$this->load->view('admin_master', $data);
		}else {

			if(!$this->Admin->check_admin_password()){
				$data['error'] ='Your Current Password not match';
				$this->session->set_flashdata($data);

				return redirect('admin_profile');
			}

			if ($this->Admin->change_password()) {
				$data['success'] ='Account Password Change Successfully';
				$this->session->set_flashdata($data);

				return redirect('admin_profile');
			}else{
				$data['error'] ='Account Password Not Change';
				$this->session->set_flashdata($data);

				return redirect('admin_profile');
			}
		}
	}
}
