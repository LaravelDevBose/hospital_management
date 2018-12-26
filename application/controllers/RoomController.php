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
		$data['content'] = 'administration/room_page';
		$data['rooms'] = $this->Room->get_all_room_data();
		$this->load->view('admin_master',$data);
	}
}
