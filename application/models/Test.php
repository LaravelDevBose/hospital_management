<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 1/6/2019
 * Time: 5:50 PM
 */

class Test extends CI_Model
{
	protected $table = 'tbl_tests';
	protected $column = 'test_id,test_code,test_name,test_parent_id,test_activation,test_status';


	public function _create_code(){
		$code_info = $this->db->order_by('test_id','desc')->limit('1')->get($this->table)->row();
		if(is_null($code_info)|| !isset($code_info)){
			$generateCode = 'T00001';
		}else{

			$num = substr($code_info->test_code, 1, strlen($code_info->test_code));

			if($num < 9):
				$num+=1;
				$generateCode = 'T0000'.$num;
			elseif($num < 99):
				$num+=1;
				$generateCode = 'T000'.$num;
			elseif($num < 999):
				$num+=1;
				$generateCode = 'T00'.$num;
			elseif($num<9999):
				$num+=1;
				$generateCode = 'T0'.$num;
			else:
				$num+=1;
				$generateCode = 'T'.$num;
			endif;
		}

		return $generateCode;
	}
	public function _get_all_data(){

		$res = $this->db->select($this->column)->where('test_status', 'a')->order_by('test_id', 'desc')->get($this->table)->result();
		if($res){
			return $res;
		}

		return FALSE;
	}

	public function _store(){

		$attr=array(
			'test_code'=>$this->_create_code(),
			'test_name'=>$this->input->post('test_name'),
			'test_activation'=>$this->input->post('test_activation'),
			'test_status'=>'A',
			'created_by'=>$this->auth->username,
			'created_at'=>$this->date_time,
		);

		$res = $this->db->insert($this->table, $attr);

		if($res){return true; } return false;
	}
	public function _data_by_id($id = Null){

		$res = $this->db->select($this->column)->where('test_id', $id)->get($this->table)->row();

		if($res){return $res;}return FALSE;
	}
	public function _update($id = Null){
		$attr=array(
			'test_name'=>$this->input->post('test_name'),
			'test_activation'=>$this->input->post('test_activation'),
			'updated_by'=>$this->auth->username,
			'updated_at'=>$this->date_time,
		);

		$this->db->where('test_id', $id);
		$this->db->update($this->table, $attr);

		if($this->db->affected_rows()){return true; } return false;
	}

	public function _delete($id = Null){

		$attr = array(
			'test_status'=>'D',
			'updated_by'=>$this->auth->username,
			'updated_at'=>$this->date_time,
		);

		$this->db->where('test_id', $id);
		$this->db->update($this->table, $attr);

		if($this->db->affected_rows()){return true; } return false;
	}
}
