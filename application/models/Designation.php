<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 12/25/2018
 * Time: 10:29 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Designation extends CI_Model
{
	protected $table = 'tbl_designations';
	protected $column = array('desg_id','desg_code','desg_name','desg_status');

	public function designation_insert(){

	}
	public function designation_data_by_id($id = Null){

	}
	public function designation_update($id = Null){

	}

	public function designation_delete($id = Null){

	}
}
