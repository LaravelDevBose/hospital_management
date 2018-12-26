<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 12/25/2018
 * Time: 10:35 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Model
{
	protected $table = 'tbl_departments';
	protected $column = array('dept_id','dept_name','dept_code','dept_status');

	public function department_insert(){

	}
	public function department_data_by_id($id = Null){

	}
	public function department_update($id = Null){

	}

	public function department_delete($id = Null){

	}
}
