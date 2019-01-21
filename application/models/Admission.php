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
	public $table='tbl_admission';
	public $id = 'ad_id';
	public $statis = 'status';
	protected $fillable = 'ad_id,ad_code,patient_id,ad_date,relies_date,doctor_id,bed_id,ad_status,status';

	public function admission_code(){
		$code_info = $this->db->order_by($this->id,'desc')->limit('1')->get($this->table)->row();
		if(is_null($code_info)|| !isset($code_info)){
			$generateCode = 'AD-001';
		}else{

			$num = substr($code_info->ad_code, 3, strlen($code_info->ad_code));

			if($num < 9):
				$num+=1;
				$generateCode = 'AD-00'.$num;
			elseif($num < 99):
				$num+=1;
				$generateCode = 'AD-0'.$num;
			else:
				$num+=1;
				$generateCode = 'AD-'.$num;

			endif;
		}

		return $generateCode;
	}

	public function all_admission_list()
	{
		$this->db->select('tbl_admission.*,tbl_patient.*,tbl_doctors.doc_name')->from($this->table);
		$this->db->join('tbl_patient','tbl_patient.patient_id == tbl_admission.patient_id','left');
		$this->db->join('tbl_doctors','tbl_doctors.doc_id == tbl_admission.doctor_id','left');
		$res = $this->db->where('ad_id', $id)->get()->result();
		if($res){return $res; } return false;
	}
	public function admission_insert($patient_id){

		$attr = array(
			'ad_code'=>$this->admission_code(),
			'patient_id' => $patient_id,
			'ad_date'=>$this->input->post('ad_date'),
			'doctor_id'=>$this->input->post('doctor_id'),
			'bed_id'=>$this->input->post('bed_id'),
			'ad_status'=>$this->input->post('ad_status'),
			'status'=>'A',
			'created_by' => $this->auth->username,
			'created_at' => $this->date_time,
		);

		$res = $this->db->insert($this->table, $attr);

		if($res){return TRUE;} return false;
	}
	public function admission_data_by_id($id = Null){

		$this->db->select('tbl_admission.*,tbl_patient.*,tbl_doctors.doc_name')->from($this->table);
		$this->db->join('tbl_patient','tbl_patient.patient_id == tbl_admission.patient_id','left');
		$this->db->join('tbl_doctors','tbl_doctors.doc_id == tbl_admission.doctor_id','left');
		$res = $this->db->where('ad_id', $id)->get()->row();
		if($res){return $res; } return false;

	}
	public function admission_update($id = Null){
		$attr = array(
			'ad_date'=>$this->input->post('ad_date'),
			'doctor_id'=>$this->input->post('doctor_id'),
			'bed_id'=>$this->input->post('bed_id'),
			'ad_status'=>$this->input->post('ad_status'),
			'updated_by' => $this->auth->username,
			'updated_at'=>$this->date_time,
		);

		$this->db->where('ad_id', $id);
		$this->db->insert($this->table, $attr);

		 if($this->db->affected_rows()){
		 	return TRUE;
		 }
		 return FALSE;
	}

	public function admission_delete($id = Null){

		$attr = array(
			'status' => 'D',
			'updated_by' => $this->auth->username,
			'updated_at'=>$this->date_time,
		);

		$this->db->where('ad_id', $id);
		$this->db->insert($this->table, $attr);

	 	if($this->db->affected_rows()){
	 		return TRUE;
	 	}
	 	return FALSE;
	}
}
