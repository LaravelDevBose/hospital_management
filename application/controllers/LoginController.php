<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 12/11/2018
 * Time: 9:58 AM
 */

class LoginController extends MY_Controller
{

	public function index()
	{
		if ($this->Admin->is_admin_logged_in())
		{
			redirect('dashboard');
		}
		else{
			$this->load->view('login_page');
		}
	}

	public function admin_login_submit(){

		if($this->Admin->admin_login_data_check()){
			 echo 1;
		}else{
			echo 0;
		}
	}

	public function admin_logout_submit(){

		$this->session->unset_userdata('auth');
		$this->session->sess_destroy();
		return redirect('/');
	}
}
