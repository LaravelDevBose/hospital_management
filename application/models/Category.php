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
	protected $column = 'cat_id,cat_code,cat_name,cat_description,cat_status,created_at';

	protected $id = 'cat_id';
	protected $code = 'cat_code';
	protected $name = 'cat_name';
	protected $status = 'cat_status';

	public function _create_code(){
		$code_info = $this->db->order_by($this->id,'desc')->limit('1')->get($this->table)->row();
		if(is_null($code_info)|| !isset($code_info)){
			$generateCode = 'C001';
		}else{

			$num = substr($code_info->cat_code, 1, strlen($code_info->cat_code));

			if($num < 9):
				$num+=1;
				$generateCode = 'C00'.$num;
			elseif($num < 99):
				$num+=1;
				$generateCode = 'C0'.$num;
			else:
				$num+=1;
				$generateCode = 'C'.$num;

			endif;
		}

		return $generateCode;
	}

	public function _get_all_data(){
		$res = $this->db->select($this->column)->where($this->status, 'A')->order_by($this->id, 'desc')->get($this->table)->result();

		if($res){return $res;}return false;
	}

	public function _store(){
		$attr[$this->code]= $this->_create_code();
		$attr[$this->name]= $this->input->post($this->name);
		$attr[$this->status]= 'A';
		$attr['created_by']= $this->auth->username;
		$attr['created_at']= $this->date_time;

		$res = $this->db->insert($this->table,$attr);

		if($res){return $res; }return false;
	}

	public function _data_by_id($id = Null){
		$res = $this->db->select($this->column)->where($this->status, 'A')->where($this->id, $id)->get($this->table)->row();

		if($res){return $res;}return false;
	}

	public function _update($id = Null){
		$attr[$this->name]= $this->input->post($this->name);
		$attr['updated_by']= $this->auth->username;
		$attr['updated_at']= $this->date_time;

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
