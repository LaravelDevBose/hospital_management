<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 12/25/2018
 * Time: 10:13 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');


class Room extends CI_Model
{

	protected $column = 'room_id,room_code,room_name,bathroom,tv,ac,room_details,room_status';
	protected $table = 'tbl_rooms';

	public function _create_code(){
		$code_info = $this->db->order_by('room_id','desc')->limit('1')->get($this->table)->row();
		if(is_null($code_info)|| !isset($code_info)){
			$generateCode = 'R00001';
		}else{

			$num = substr($code_info->room_code, 1, strlen($code_info->room_code));

			if($num < 9):
				$num+=1;
				$generateCode = 'R0000'.$num;
			elseif($num < 99):
				$num+=1;
				$generateCode = 'R000'.$num;
			elseif($num < 999):
				$num+=1;
				$generateCode = 'R00'.$num;
			elseif($num<9999):
				$num+=1;
				$generateCode = 'R0'.$num;
			else:
				$num+=1;
				$generateCode = 'R'.$num;
			endif;
		}

		return $generateCode;
	}
	public function _get_all_data(){

		$res = $this->db->select($this->column)->where('room_status', 'a')->order_by('room_id', 'desc')->get($this->table)->result();
		if($res){
			return $res;
		}

		return FALSE;
	}

	public function _store(){

		$attr=array(
			'room_code'=>$this->_create_code(),
			'room_name'=>$this->input->post('room_name'),
			'bathroom'=>$this->input->post('bathroom'),
			'tv'=>$this->input->post('tv'),
			'ac'=>$this->input->post('ac'),
			'room_details'=>$this->input->post('room_details'),
			'room_status'=>'A',
			'created_by'=>$this->auth->username,
			'created_at'=>$this->date_time,
		);

		$res = $this->db->insert($this->table, $attr);

		if($res){return true; } return false;
	}
	public function _data_by_id($id = Null){

		$res = $this->db->select($this->column)->where('room_id', $id)->get($this->table)->row();

		if($res){return $res;}return FALSE;
	}
	public function _update($id = Null){
		$attr=array(
			'room_name'=>$this->input->post('room_name'),
			'bathroom'=>$this->input->post('bathroom'),
			'tv'=>$this->input->post('tv'),
			'ac'=>$this->input->post('ac'),
			'room_details'=>$this->input->post('room_details'),
			'updated_by'=>$this->auth->username,
			'updated_at'=>$this->date_time,
		);

		$this->db->where('room_id', $id);
		$this->db->update($this->table, $attr);

		if($this->db->affected_rows()){return true; } return false;
	}

	public function _delete($id = Null){

		$attr = array(
			'room_status'=>'D',
			'updated_by'=>$this->auth->username,
			'updated_at'=>$this->date_time,
		);

		$this->db->where('room_id', $id);
		$this->db->update($this->table, $attr);

		if($this->db->affected_rows()){return true; } return false;
	}
}
