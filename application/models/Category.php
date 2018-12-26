<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 12/25/2018
 * Time: 10:40 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends CI_Model
{
	protected $table = 'tbl_categories';
	protected $column = array('cat_id','cat_code','cat_name','cat_description','cat_status');

	public function category_insert(){

	}
	public function category_data_by_id($id = Null){

	}
	public function category_update($id = Null){

	}

	public function category_delete($id = Null){

	}
}
