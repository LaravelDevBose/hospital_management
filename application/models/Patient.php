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
	protected $table = 'tbl_patient';
	protected $column = 'patient_id,patient_code,first_name,last_name,dob,age,patient_gender,blood_group, father_name,spounce_name,religion,patient_address,patient_status';


	public function patient_code(){
		$code_info = $this->db->order_by('patient_id','desc')->limit('1')->get($this->table)->row();
		if(is_null($code_info)|| !isset($code_info)){
			$generateCode = 'P-001';
		}else{

			$num = substr($code_info->patient_code, 2, strlen($code_info->patient_code));

			if($num < 9):
				$num+=1;
				$generateCode = 'P-00'.$num;
			elseif($num < 99):
				$num+=1;
				$generateCode = 'P-0'.$num;
			else:
				$num+=1;
				$generateCode = 'P-'.$num;

			endif;
		}

		return $generateCode;
	}

	public function patient_list()
	{
		$this->db->select('tbl_patient.*,tbl_emergency.*')->from('tbl_patient');
		$this->db->join('tbl_emergency','tbl_emergency.pat_id = tbl_patient.patient_id','left');
		$res = $this->db->where('tbl_patient.patient_status','A')->order_by('tbl_patient.patient_id','desc')->get()->result();

		if($res){
			return $res;
		}
		return false;
	}

	public function patient_insert(){

		$attr = array(
			'patient_code'=>$this->patient_code(),
			'first_name'=>$this->input->post('first_name'),
			'last_name'=>$this->input->post('last_name'),
			'dob'=>$this->input->post('dob'),
			'age'=>$this->input->post('age'),
			'patient_gender'=>$this->input->post('patient_gender'),
			'blood_group'=>$this->input->post('blood_group'),
			'father_name'=>$this->input->post('father_name'),
			'spounce_name'=>$this->input->post('spounce_name'),
			'religion'=>$this->input->post('religion'),
			'patient_address'=>$this->input->post('patient_address'),
			'patient_status'=>'A',
			'created_at' => $this->date_time,
			'created_by'=>$this->auth->username,
		);

		$res = $this->db->insert($this->table,$attr);
		$id = $this->db->insert_id();

		if($res){return $id; }return false;
	}
	public function patient_data_by_id($id = Null){
		$this->db->select('tbl_patient.*,tbl_emergency.*')->from($this->table);
		$this->db->join('tbl_emergency','tbl_emergency.pat_id = tbl_patient.patient_id','left');
		$res = $this->db->where('tbl_patient.patient_id',$id)->get()->row();

		if($res){
			return $res;
		}
		return false;	}
	public function patient_update($id = Null){
		$attr = array(
			'first_name'=>$this->input->post('first_name'),
			'last_name'=>$this->input->post('last_name'),
			'dob'=>$this->input->post('dob'),
			'age'=>$this->input->post('age'),
			'patient_gender'=>$this->input->post('patient_gender'),
			'blood_group'=>$this->input->post('blood_group'),
			'father_name'=>$this->input->post('father_name'),
			'spounce_name'=>$this->input->post('spounce_name'),
			'religion'=>$this->input->post('religion'),
			'patient_address'=>$this->input->post('patient_address'),
			'updated_at' => $this->date_time,
			'updated_by'=>$this->auth->username,
		);

		$this->db->where('patient_id', $id);
		$this->db->update($this->table,$attr);

		if($this->db->affected_rows()){return TRUE; }return false;
	}

	public function patient_delete($id = Null){
		$attr = array(
			'patient_status'=>'D',
			'updated_at' => $this->date_time,
			'updated_by'=>$this->auth->username,
		);

		$this->db->where('patient_id', $id);
		$this->db->update($this->table,$attr);

		if($this->db->affected_rows()){return TRUE; }return false;
	}
}
