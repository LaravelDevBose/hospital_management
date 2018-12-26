<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 12/25/2018
 * Time: 10:51 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class ReportTemplate extends CI_Model
{
	protected $table = 'tbl_test_templates';
	protected $column = array('temp_id','test_id','template','temp_status');

	public function report_template_insert(){

	}
	public function report_template_data_by_id($id = Null){

	}
	public function report_template_update($id = Null){

	}

	public function report_template_delete($id = Null){

	}
}
