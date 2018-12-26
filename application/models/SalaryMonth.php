<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 12/25/2018
 * Time: 10:18 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class SalaryMonth extends CI_Model
{
	protected $table = 'tbl_salary_month';
	protected $column = array('slm_id','month_name','year','slm_status');

	public function salary_month_insert(){

	}
	public function salary_month_data_by_id($id = Null){

	}
	public function salary_month_update($id = Null){

	}

	public function salary_month_delete($id = Null){

	}
}
