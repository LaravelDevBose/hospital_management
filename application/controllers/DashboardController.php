<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 12/22/2018
 * Time: 12:31 PM
 */

class DashboardController extends MY_Controller
{
	/*================View Admin Dashboard=================*/
	public function index()
	{
		if ($this->Admin->is_admin_logged_in())
		{
			$data['title'] = 'Dashboard';
			$data['content'] = 'dashboard/home_page';
			$this->load->view('admin_master', $data);
		}
		else{
			return redirect('/');
		}
	}
}
