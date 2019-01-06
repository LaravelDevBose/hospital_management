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
}
