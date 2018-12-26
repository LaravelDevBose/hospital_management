<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 12/25/2018
 * Time: 10:37 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Model
{
	protected $table = 'tbl_brands';
	protected $column = array('brand_id','brand_code','brand_name','brand_status');

	public function brand_insert(){

	}
	public function brand_data_by_id($id = Null){

	}
	public function brand_update($id = Null){

	}

	public function brand_delete($id = Null){

	}
}
