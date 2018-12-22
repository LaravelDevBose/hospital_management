<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 12/22/2018
 * Time: 10:13 AM
 */

class Admin extends CI_Model
{

	/*===========Admin Login Name & Pass Check============*/
	public function admin_login_data_check()
	{
		$identity 	= $this->input->post('identity');
		$pass 	= md5($this->input->post('password'));

		$field_name = $this->login_identity_check($identity);

		$this->db->select('*');
		$this->db->from("tbl_admins");
		$this->db->where($field_name." like binary",$identity);
		$this->db->where("password like binary",$pass);
		$this->db->where('active_status', 'A')->where('status', 'A');
		$res = $this->db->get()->row();

		if($res)
		{
			$attr = array(
				'id' => $res->admin_id,
				'name' => $res->username,
				'avatar' => $res->avatar
			);
			$this->session->set_userdata($attr);
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	/**
	 * Check either username or email.
	 * @return string
	 */
	public function login_identity_check($identity = Null)
	{
		return filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
	}

	/*===================Admin Login Check======================*/
	public function is_admin_logged_in()
	{
		return $this->session->userdata('id') != FALSE;
	}

	/*====== get single admin info =================*/
	public function get_single_admin_data($id = Null){

		$res = $this->db->where('admin_id', $id)->get('tbl_admins')->row();

		if($res){
			return $res;
		}
		return false;
	}

	/*=========== check admin Current Password ===========*/
	public function check_admin_password(){
		$user_name = $this->session->userData('name');
		$password = md5($this->input->post('crnt_password'));

		$this->db->select('*');
		$this->db->from("tbl_admins");
		$this->db->where("username like binary",$user_name);
		$this->db->where("password like binary",$password);
		$res = $this->db->get()->row();

		if($res){
			return TRUE;
		}
		return FALSE;

	}

	/*========= admin profile update =============*/
	public function profile_update($admin_id = Null){
		$image_path = $this->input->post('old_avatar');

		if(isset($_FILES['image']) || $_FILES['image']['error'] == UPLOAD_ERR_NO_FILE)
		{
			$path = $this->Image_upload->single_image_store('admin_image', 200, 200);
			if(file_exists($image_path)){
				unlink($image_path);
			}
			$image_path = $path;
		}

		$attr = array(
			'email'=>$this->input->post('email'),
			'phone_num'=>$this->input->post('phone_num'),
			'avatar'=>$image_path,
			'updated_by'=>$this->session->userData('name'),
			'updated_at'=>date('Y-m-d H:i:s'),
		);

		$this->db->where('admin_id', $admin_id);
		$this->db->update('tbl_admins', $attr);

		if($this->db->affected_rows()){
			return TRUE;
		}

		return FALSE;
	}

	/*======== Change Account Password ==========*/
	public function change_password(){

		$attr = array(
			'password' => md5($this->input->post('password'))
		);

		$this->db->where('admin_id', $this->session->userData('id'));
		$this->db->update('tbl_admins', $attr);

		if($this->db->affected_rows()){
			return TRUE;
		}
		return FALSE;
	}
}
