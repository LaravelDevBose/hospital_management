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

	public function _get_all_data(){

		$res = $this->db->select($this->column)->where('status', 'a')->get($this->table)->result();

		if($res){
			return $res;
		}

		return FALSE;
	}

	public function _insert(){

	}
	public function _data_by_id($id = Null){

	}
	public function _update($id = Null){

	}

	public function _delete($id = Null){

	}
}
