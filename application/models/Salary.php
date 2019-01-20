<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 12/25/2018
 * Time: 10:35 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Salary extends CI_Model
{
	protected $table = 'tbl_salary_payments';
	protected $column = 'sp_id,sp_code,emp_id,month_id,emp_type,payment_amount,due_amount,sp_note,sp_status';

	protected $id = 'sp_id';
	protected $code = 'sp_code';
	protected $status = 'sp_status';

	public function _create_code(){
		$code_info = $this->db->order_by($this->id,'desc')->limit('1')->get($this->table)->row();
		if(is_null($code_info)|| !isset($code_info)){
			$generateCode = 'SP-001';
		}else{

			$num = substr($code_info->sp_code, 3, strlen($code_info->sp_code));

			if($num < 9):
				$num+=1;
				$generateCode = 'SP-00'.$num;
			elseif($num < 99):
				$num+=1;
				$generateCode = 'SP-0'.$num;
			else:
				$num+=1;
				$generateCode = 'SP-'.$num;

			endif;
		}

		return $generateCode;
	}

	public function _get_all_data(){
		$this->db->select('tbl_doctors.*,tbl_designations.desg_name,tbl_departments.dept_name')->from('tbl_doctors');
		$this->db->join('tbl_designations','tbl_designations.desg_id = tbl_doctors.desg_id','left');
		$this->db->join('tbl_departments','tbl_departments.dept_id = tbl_doctors.dept_id','left');
		$res = $this->db->where('tbl_doctors.sp_status','A')->order_by('tbl_doctors.doc_id','desc')->get()->result();

		if($res){return $res;}return false;
	}

	public function _store(){
		$attr = array(
			'sp_code'=>$this->_create_code(),
			'doc_name'=>$this->input->post('doc_name'),
			'doc_email'=>$this->input->post('doc_email'),
			'doc_phone'=>$this->input->post('doc_phone'),
			'doc_gender'=>$this->input->post('doc_gender'),
			'desg_id'=>$this->input->post('desg_id'),
			'dept_id'=>$this->input->post('dept_id'),
			'doc_address'=>$this->input->post('doc_address'),
			'doc_image'=>$this->input->post('doc_image'),
			'doc_edu'=>$this->input->post('doc_edu'),
			'sp_status'=>'A',
			'doc_salary'=>$this->input->post('doc_salary'),
			'created_by'=>$this->auth->username,
			'created_at'=>$this->date_time,
		);

		$res = $this->db->insert($this->table,$attr);

		if($res){return $res; }return false;
	}

	public function _data_by_id($id = Null){
		$res = $this->db->select($this->column)->where($this->status, 'A')->where($this->id, $id)->get($this->table)->row();

		if($res){return $res;}return false;
	}

	public function _update($id = Null){
		$attr = array(
			'doc_name'=>$this->input->post('doc_name'),
			'doc_email'=>$this->input->post('doc_email'),
			'doc_phone'=>$this->input->post('doc_phone'),
			'doc_gender'=>$this->input->post('doc_gender'),
			'desg_id'=>$this->input->post('desg_id'),
			'dept_id'=>$this->input->post('dept_id'),
			'doc_address'=>$this->input->post('doc_address'),
			'doc_image'=>$this->input->post('doc_image'),
			'doc_edu'=>$this->input->post('doc_edu'),
			'doc_salary'=>$this->input->post('doc_salary'),
			'updated_by'=>$this->auth->username,
			'updated_at'=>$this->date_time,
		);

		$this->db->where($this->id, $id);
		$this->db->update($this->table,$attr);

		if($this->db->affected_rows()){return true; }return false;
	}

	public function _delete($id = Null){
		$attr[$this->status]= 'D';
		$attr['updated_by']= $this->auth->username;
		$attr['updated_at']= $this->date_time;

		$this->db->where($this->id, $id);
		$this->db->update($this->table,$attr);

		if($this->db->affected_rows()){return true; }return false;
	}
}
