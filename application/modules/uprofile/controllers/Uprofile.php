<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Uprofile extends MX_Controller {
	function __construct() {
		
		$this->load->model('mdl_uprofile');
		if(empty($_SESSION['u_id']))
		redirect('login');
		}
	

	public function index()
	{
		$this->db->select('*');
		$this->db->from('uprofile');
		$this->db->join('user', 'user.u_id= uprofile.u_id');
		$this->db->where('uprofile.u_id',$this->session->userdata('u_id'));
		$val['data']=$this->db->get();
		$val['file']='uprofile/uprofile_view';
		echo Modules::run('template/layout1',$val);
	}
	public function editview()
	{
 
		$this->db->where('u_id',$this->session->userdata('u_id'));
		$val['data']=$this->db->get('uprofile');
		$val['file']='uprofile/edituprofile_view';
		echo Modules::run('template/layout1',$val);
	}
	public function edit() 
	{
 
		
		$data['email']=$_POST['email'];
		$data['mobile']=$_POST['mobile'];
		$data['profession']=$_POST['profession'];
		$data['bio']=$_POST['bio'];
		$data['address']=$_POST['address'];
		$data['skills']=$_POST['skills'];
		$data['hqualification']=$_POST['hqualification'];
		$data['institute']=$_POST['institute'];
		$data['stream']=$_POST['stream'];
		$data['passout']=$_POST['passout'];
		$data['marks']=$_POST['marks'];
		$data['dob']=$_POST['dob'];
		$data['experience']=$_POST['experience'];
		$data['gender']=$_POST['gender'];
		$data['website']=$_POST['website'];

		$this->mdl_uprofile->update($data);
		$this->session->set_flashdata('msg', '<b style="color:green;">Profile Updated successfully!</b>');
		redirect('uprofile');
	}


	
}
