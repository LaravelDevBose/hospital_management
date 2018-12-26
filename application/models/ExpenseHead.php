<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 12/25/2018
 * Time: 10:20 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class ExpenseHead extends CI_Model
{
	protected $table = 'tbl_expense_heads';
	protected $column = array('eh_id','eh_code','eh_name','eh_status');

	public function expense_head_insert(){

	}
	public function expense_head_data_by_id($id = Null){

	}
	public function expense_head_update($id = Null){

	}

	public function expense_head_delete($id = Null){

	}
}
