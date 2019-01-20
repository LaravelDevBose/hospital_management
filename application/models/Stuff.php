<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 12/25/2018
 * Time: 10:35 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Stuff extends CI_Model
{
	protected $table = 'tbl_stuffs';
	protected $column = 'stuff_id,stuff_code,stuff_name,stuff_email,stuff_phone,stuff_gender,desg_id,dept_id, stuff_address,
		stuff_image,stuff_edu,stuff_status,stuff_salary';

	protected $id = 'stuff_id';
	protected $code = 'stuff_code';
	protected $name = 'stuff_name';
	protected $status = 'stuff_status';

	public function _create_code(){
		$code_info = $this->db->order_by($this->id,'desc')->limit('1')->get($this->table)->row();
		if(is_null($code_info)|| !isset($code_info)){
			$generateCode = 'ST-001';
		}else{

			$num = substr($code_info->stuff_code, 3, strlen($code_info->stuff_code));

			if($num < 9):
				$num+=1;
				$generateCode = 'ST-00'.$num;
			elseif($num < 99):
				$num+=1;
				$generateCode = 'ST-0'.$num;
			else:
				$num+=1;
				$generateCode = 'ST-'.$num;

			endif;
		}

		return $generateCode;
	}

	public function _get_all_data(){
		$this->db->select('tbl_stuffs.*,tbl_designations.desg_name,tbl_departments.dept_name')->from('tbl_stuffs');
		$this->db->join('tbl_designations','tbl_designations.desg_id = tbl_stuffs.desg_id','left');
		$this->db->join('tbl_departments','tbl_departments.dept_id = tbl_stuffs.dept_id','left');
		$res = $this->db->where('tbl_stuffs.stuff_status','A')->order_by('tbl_stuffs.stuff_id','desc')->get()->result();

		if($res){return $res;}return false;
	}

	public function stuff_list()
	{
		$res = $this->db->select('stuff_id,stuff_code,stuff_name')->where('stuff_status','A')->order_by('stuff_id','desc')->get($this->table)->result();

		if($res){return $res;} return false;
	}

	public function _store(){
		$attr = array(
			'stuff_code'=>$this->_create_code(),
			'stuff_name'=>$this->input->post('stuff_name'),
			'stuff_email'=>$this->input->post('stuff_email'),
			'stuff_phone'=>$this->input->post('stuff_phone'),
			'stuff_gender'=>$this->input->post('stuff_gender'),
			'desg_id'=>$this->input->post('desg_id'),
			'dept_id'=>$this->input->post('dept_id'),
			'stuff_address'=>$this->input->post('stuff_address'),
			'stuff_image'=>$this->input->post('stuff_image'),
			'stuff_edu'=>$this->input->post('stuff_edu'),
			'stuff_status'=>'A',
			'stuff_salary'=>$this->input->post('stuff_salary'),
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
			'stuff_name'=>$this->input->post('stuff_name'),
			'stuff_email'=>$this->input->post('stuff_email'),
			'stuff_phone'=>$this->input->post('stuff_phone'),
			'stuff_gender'=>$this->input->post('stuff_gender'),
			'desg_id'=>$this->input->post('desg_id'),
			'dept_id'=>$this->input->post('dept_id'),
			'stuff_address'=>$this->input->post('stuff_address'),
			'stuff_image'=>$this->input->post('stuff_image'),
			'stuff_edu'=>$this->input->post('stuff_edu'),
			'stuff_salary'=>$this->input->post('stuff_salary'),
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
