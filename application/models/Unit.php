<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 12/25/2018
 * Time: 10:35 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends CI_Model
{
	protected $table = 'tbl_units';
	protected $column = 'unit_id,unit_name,unit_status,created_at';

	protected $id = 'unit_id';
	protected $name = 'unit_name';
	protected $status = 'unit_status';

	public function _get_all_data(){
		$res = $this->db->select($this->column)->where($this->status, 'A')->order_by($this->id, 'desc')->get($this->table)->result();

		if($res){return $res;}return false;
	}

	public function _store(){
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
