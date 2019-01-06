<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 1/6/2019
 * Time: 3:26 PM
 */

class ReportTemplate extends CI_Model
{
	protected $table = 'tbl_test_templates';
	protected $column = 'temp_id,test_id,template,temp_status';

	public function _get_all_data(){
		$this->db->select($this->table.'.* ,tbl_tests.test_id, tbl_tests.test_code, tbl_tests.test_name')->from($this->table);
		$this->db->join('tbl_tests', 'tbl_test_templates.test_id = tbl_tests.test_id');
		$this->db->where('tbl_test_templates.temp_status', 'A')->order_by('temp_id', 'desc');
		$res = $this->db->get()->result();

		if($res){return $res;} return false;
	}

	public function _store(){

		$attr = array(
			'test_id' => $this->input->post('test_id'),
			'template' => $this->input->post('template'),
			'temp_status'=>'A',
			'created_by'=>$this->auth->username,
			'created_at'=>$this->date_time,
		);
		$res = $this->db->insert($this->table, $attr);
		if($res){return TRUE;}return false;
	}
	public function _data_by_id($id = Null){
		$this->db->select($this->table.'.*,tbl_tests.test_code, tbl_tests.test_name')->from($this->table);
		$this->db->join('tbl_tests', 'tbl_tests.test_id ='.$this->table.'.test_id');
		$this->db->where('temp_id',$id)->where('tbl_test_templates.temp_status', 'A');
		$res = $this->db->get()->row();

		if($res){return $res;} return false;
	}
	public function _update($id = Null){
		$attr = array(
			'test_id' => $this->input->post('test_id'),
			'template' => $this->input->post('template'),
			'updated_by'=>$this->auth->username,
			'updated_at'=>$this->date_time,
		);

		$this->db->where('temp_id', $id);
		$this->db->update($this->table, $attr);

		if($this->db->affected_rows()){return true; } return false;
	}

	public function _delete($id = Null){
		$attr = array(
			'temp_status'=>'D',
			'updated_by'=>$this->auth->username,
			'updated_at'=>$this->date_time,
		);

		$this->db->where('temp_id', $id);
		$this->db->update($this->table, $attr);

		if($this->db->affected_rows()){return true; } return false;
	}
}
