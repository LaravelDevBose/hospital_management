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
	protected $column = 'eh_id,eh_code,eh_name,eh_status';

	public function _create_code(){
		$code_info = $this->db->order_by('eh_id','desc')->limit('1')->get($this->table)->row();
		if(is_null($code_info)|| !isset($code_info)){
			$generateCode = 'EH001';
		}else{

			$num = substr($code_info->eh_code, 2, strlen($code_info->eh_code));

			if($num < 9):
				$num+=1;
				$generateCode = 'EH00'.$num;
			elseif($num < 99):
				$num+=1;
				$generateCode = 'EH0'.$num;
			else:
				$num+=1;
				$generateCode = 'EH'.$num;

			endif;
		}

		return $generateCode;
	}

	public function _get_all_data(){
		$res = $this->db->select($this->column)->where('eh_status', 'A')->order_by('eh_id', 'desc')->get($this->table)->result();

		if($res){return $res;}return false;
	}

	public function _store(){
		 $attr = array(
		 	'eh_code'=>$this->_create_code(),
			 'eh_name'=>$this->input->post('eh_name'),
			 'eh_status'=>'A',
			 'created_by'=>$this->auth->username,
			 'created_at'=>$this->date_time,
		 );

		 $res = $this->db->insert($this->table,$attr);

		 if($res){return $res; }return false;
	}

	public function _data_by_id($id = Null){
		$res = $this->db->select($this->column)->where('eh_status', 'A')->where('eh_id', $id)->get($this->table)->row();

		if($res){return $res;}return false;
	}

	public function _update($id = Null){
		$attr = array(
			'eh_name'=>$this->input->post('eh_name'),
			'updated_by'=>$this->auth->username,
			'updated_at'=>$this->date_time,
		);

		$this->db->where('eh_id', $id);
		$this->db->update($this->table,$attr);

		if($this->db->affected_rows()){return true; }return false;
	}

	public function _delete($id = Null){
		$attr = array(
			'eh_status'=>'D',
			'updated_by'=>$this->auth->username,
			'updated_at'=>$this->date_time,
		);

		$this->db->where('eh_id', $id);
		$this->db->update($this->table,$attr);

		if($this->db->affected_rows()){return true; }return false;
	}
}
