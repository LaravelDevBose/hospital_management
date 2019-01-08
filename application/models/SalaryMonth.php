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
	protected $column = 'slm_id,month_name,year,slm_status';

	public function _get_all_data(){
		$res = $this->db->select($this->column)->where('slm_status','A')->order_by('slm_id','desc')->get($this->table)->result();

		if($res){return $res;} return FALSE;
	}
	public function _store(){

		$attr = array(
			'month_name'=> $this->input->post('month_name'),
			'year'=> $this->input->post('year'),
			'slm_status'=>'A',
			'created_by'=>$this->auth->username,
			'created_at'=>$this->date_time,
		);

		$res = $this->db->insert($this->table, $attr);
		if($res){return TRUE; }return false;
	}
	public function _data_by_id($id = Null){
		$res = $this->db->select($this->column)->where('slm_id', $id)->where('slm_status','A')->get($this->table)->row();

		if($res){return $res;} return FALSE;
	}
	public function _update($id = Null){
		$attr = array(
			'month_name'=> $this->input->post('month_name'),
			'year'=> $this->input->post('year'),
			'updated_by'=>$this->auth->username,
			'updated_at'=>$this->date_time,
		);

		$this->db->where('slm_id', $id);
		$this->db->update($this->table, $attr);
		if($this->db->affected_rows()){return TRUE; }return false;
	}

	public function _delete($id = Null){
		$attr = array(
			'slm_status'=> 'D',
			'updated_by'=>$this->auth->username,
			'updated_at'=>$this->date_time,
		);

		$this->db->where('slm_id', $id);
		$this->db->update($this->table, $attr);
		if($this->db->affected_rows()){return TRUE; }return false;
	}
}
