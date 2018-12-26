<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 12/25/2018
 * Time: 10:06 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Model
{

	protected $column = array('patient_id','patient_code','first_name','last_name','dob','age','patient_gender','blood_group',
								'father_name','spounce_name','religion','patient_address','patient_status');

	public function patient_insert(){

	}
	public function patient_data_by_id($id = Null){

	}
	public function patient_update($id = Null){

	}

	public function patient_delete($id = Null){

	}
}
