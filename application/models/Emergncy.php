<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 12/25/2018
 * Time: 10:06 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Emergncy extends CI_Model
{
	protected $table = 'tbl_emergency';
	protected $column = 'emg_id,pat_id,emg_fullname,emg_relation,emg_mobile,emg_address,emg_status';

	public function emg_insert($pat_id = Null){

		$attr= array(
			'pat_id'=>$pat_id,
			'emg_fullname'=>$this->input->post('emg_fullname'),
			'emg_relation'=>$this->input->post('emg_relation'),
			'emg_mobile'=>$this->input->post('emg_mobile'),
			'emg_address'=>$this->input->post('emg_address'),
			'emg_status'=>'A',
			'created_at' => $this->date_time,
		);

		$res = $this->db->insert($this->table,$attr);

		if($res){return $res; }return false;
	}
	public function emg_data_by_id($id = Null){
		$res = $this->db->where('emg_id',$id)->get($this->table)->row();

		if($res){
			return $res;
		}
		return FALSE;
	}

	public function emg_update($id = Null){
		$attr= array(
			'emg_fullname'=>$this->input->post('emg_fullname'),
			'emg_relation'=>$this->input->post('emg_relation'),
			'emg_mobile'=>$this->input->post('emg_mobile'),
			'emg_address'=>$this->input->post('emg_address'),
			'updated_at' => $this->date_time,
		);

		$this->db->where('pat_id', $id);
		$this->db->update($this->table,$attr);

		if($this->db->affected_rows()){return TRUE; }return false;
	}

	public function emg_delete($id = Null){
		$attr= array(
			'emg_status'=>'D',
			'updated_at' => $this->date_time,
		);

		$this->db->where('emg_id', $id);
		$this->db->update($this->table,$attr);

		if($this->db->affected_rows()){return TRUE; }return false;
	}
}
