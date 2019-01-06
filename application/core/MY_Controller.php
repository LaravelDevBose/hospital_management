<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 12/8/2018
 * Time: 11:56 AM
 */

Class MY_Controller extends CI_Controller{

	public $auth='';
	public $date_time;
	public $date;
	public function __construct()
	{
		parent::__construct();
		$this->auth = $this->session->userdata('auth');
		$this->date_time = date('Y-m-d H:i:s');
		$this->date = date('Y-m-d');
	}

	public function message($data){
		$this->session->set_flashdata($data);
	}
}
