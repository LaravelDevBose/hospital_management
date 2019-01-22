<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 12/25/2018
 * Time: 10:35 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model
{
	protected $table = 'tbl_products';
	protected $column = 'pro_id,pro_code,pro_name,genetic_name,body_num,body_rate,pro_type,cat_id,brand_id ,pro_reorder, pro_purchase_rate,pro_sale_rate,unit_id,pro_status';

	protected $id = 'pro_id';
	protected $code = 'pro_code';
	protected $name = 'pro_name';
	protected $status = 'pro_status';

	public function _create_code(){
		$code_info = $this->db->order_by($this->id,'desc')->limit('1')->get($this->table)->row();
		if(is_null($code_info)|| !isset($code_info)){
			$generateCode = 'P001';
		}else{

			$num = substr($code_info->pro_code, 4, strlen($code_info->pro_code));

			if($num < 9):
				$num+=1;
				$generateCode = 'P00'.$num;
			elseif($num < 99):
				$num+=1;
				$generateCode = 'P0'.$num;
			else:
				$num+=1;
				$generateCode = 'P'.$num;

			endif;
		}

		return $generateCode;
	}

	public function _get_all_data(){
		$this->db->select('tbl_products.*,tbl_brands.brand_code,tbl_brands.brand_name,tbl_categories.cat_name,
		 tbl_categories.cat_code,tbl_units.unit_name')->from('tbl_products');

		$this->db->join('tbl_brands','tbl_brands.brand_id = tbl_products.brand_id','left');
		$this->db->join('tbl_categories','tbl_categories.cat_id = tbl_products.cat_id','left');
		$this->db->join('tbl_categories','tbl_categories.unit_id = tbl_products.unit_id','left');
		$res = $this->db->where('tbl_products.pro_status','A')->order_by('tbl_products.pro_id','desc')->get()->result();

		if($res){return $res;}return false;
	}

	public function _list()
	{
		$res = $this->db->select('pro_id,pro_code,pro_name')->where('pro_status','A')->order_by('pro_id','desc')->get($this->table)->result();

		if($res){return $res;} return false;
	}

	public function _store(){
		$attr = array(
			'pro_code'=>$this->_create_code(),
			'pro_name'=>$this->input->post('pro_name'),
			'genetic_name'=>$this->input->post('genetic_name'),
			'body_num'=>$this->input->post('body_num'),
			'doc_gender'=>$this->input->post('doc_gender'),
			'body_rate'=>$this->input->post('body_rate'),
			'pro_type'=>$this->input->post('pro_type'),
			'cat_id'=>$this->input->post('cat_id'),
			'brand_id'=>$this->input->post('brand_id'),
			'pro_reorder'=>$this->input->post('pro_reorder'),
			'pro_purchase_rate'=>$this->input->post('pro_purchase_rate'),
			'pro_sale_rate'=>$this->input->post('pro_sale_rate'),
			'unit_id'=>$this->input->post('unit_id'),
			'pro_status'=>'A',
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
			'pro_name'=>$this->input->post('pro_name'),
			'genetic_name'=>$this->input->post('genetic_name'),
			'body_num'=>$this->input->post('body_num'),
			'doc_gender'=>$this->input->post('doc_gender'),
			'body_rate'=>$this->input->post('body_rate'),
			'pro_type'=>$this->input->post('pro_type'),
			'cat_id'=>$this->input->post('cat_id'),
			'brand_id'=>$this->input->post('brand_id'),
			'pro_reorder'=>$this->input->post('pro_reorder'),
			'pro_purchase_rate'=>$this->input->post('pro_purchase_rate'),
			'pro_sale_rate'=>$this->input->post('pro_sale_rate'),
			'unit_id'=>$this->input->post('unit_id'),
			'pro_status'=>'A',
			'created_by'=>$this->auth->username,
			'created_at'=>$this->date_time,
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
