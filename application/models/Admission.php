<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 12/25/2018
 * Time: 9:59 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Admission extends CI_Model
{
	protected $fillable = array('ad_id', 'ad_code','patient_id','ad_date','relies_date','doctor_id','bed_id','ad_status','status');

	public function admission_insert(){

	}
	public function admission_data_by_id($id = Null){

	}
	public function admission_update($id = Null){

	}

	public function admission_delete($id = Null){

	}
}
