<?php
/**
 * Created by PhpStorm.
 * User: Arup
 * Date: 1/8/2019
 * Time: 10:02 AM
 */

class PatientController extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->Admin->is_admin_logged_in())
		{
			redirect('/');
		}
	}

	public function index()
	{
		if (!$this->Admin->is_admin_logged_in())
		{
			redirect('/');
		}else{
			redirect('dashboard');
		}
	}

	public function patient_list_page(){
		$data['title'] = 'Patient List';
		$data['content'] = 'admission/patient_list_page';
		$data['patients'] = $this->Patient->patient_list();
		$this->load->view('admin_master',$data);
	}

	public function patient_edit($id = Null){

		if($res = $this->Patient->patient_data_by_id($id)){
			$data['patient'] = $res;
			$data['title'] = 'Patient Update';
			$data['content'] = 'admission/patient_edit_page';
			$this->load->view('admin_master',$data);
		}else{
			$data['warning']="No Data Found";
			$this->message($data);
			redirect('patient_list');
		}
	}

	public function patient_update($id = Null){
		$this->form_validation->set_rules('first_name', 'Patient Name ', 'required|trim');
		$this->form_validation->set_rules('emg_fullname', 'Emg. Person Name ', 'required|trim');
		$this->form_validation->set_rules('emg_mobile', 'Emg. Phone ', 'required|trim');

		if($this->form_validation->run() == FALSE)
		{	$data['patient']=$this->Patient->patient_data_by_id($id);
			$data['title'] = 'Patient Update';
			$data['content'] = 'admission/patient_edit_page';
			$this->load->view('admin_master',$data);
		}else{
			if($this->Patient->patient_update($id)){
				$this->Emergncy->emg_update($id);
				$data['success']="Update Successful..";
				$this->message($data);
				redirect('patient_list');
			}else{
				$data['error']="Update Un-successful";
				$this->message($data);
				redirect('patient_list');
			}
		}
	}

	public function patient_delete($id = Null){
		
		if($this->Patient->patient_delete($id)){
			$data['success']="Delete Successful..";
			$this->message($data);
			redirect('patient_list');
		}else{
			$data['error']="Delete Un-successful";
			$this->message($data);
			redirect('patient_list');
		}
	}
}
