<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends MX_Controller {
	function __construct() {
		
		$this->load->model('mdl_admin');
		if(empty($_SESSION['u_id']))
		redirect('login');
		elseif($_SESSION['authorization']==1 || $_SESSION['authorization']==2 || $_SESSION['authorization']==3 )
		redirect('home');
		}
	

	public function index()
	{

		$val['skills']=$this->db->get('skills');
		$val['industry']=$this->db->get('industry');
		$val['file']='admin/admindashboard_view';
		echo Modules::run('template/layout1',$val);
	}
	public function employeer()
	{
		$this->db->where('authorization',1);
		$val['employeer']=$this->db->get('user');
		$val['file']='admin/employeer_view';
		echo Modules::run('template/layout1',$val);
	}
	public function addskill()
	{
		$data['skname']=$_POST['skname'];
		$this->mdl_admin->addskill($data);
		$this->session->set_flashdata('msg', '<b style="color:green;">Skill added successfully!</b>');
		redirect('admin');

	}
	public function addindustry()
	{
		$data['iname']=$_POST['iname'];
		$this->mdl_admin->addindustry($data);
		$this->session->set_flashdata('msg', '<b style="color:green;">Industry added successfully!</b>');
		redirect('admin');

	}
	public function demployeer()
	{

		
		$val['file']='admin/demployeer_view';
		$id = $this->uri->segment(3);
		$this->db->where('u_id',$id); 
		$val['data']=$this->db->get('user');
		echo Modules::run('template/layout1',$val);
	}
	public function employeerstatus()
	{

		
		$u_id=$_POST['uid'];
		$data['status']=$_POST['status'];
		$this->mdl_admin->employeerupdate($data,$u_id);
		$this->session->set_flashdata('msg', '<b style="color:green;">Status updated successfully!</b>');
		redirect('admin/employeer');
	}

	
	// public function dashboard()
	// {

	// 	$this->db->where('u_id',$this->session->userdata('u_id'));
	// 	$val['jobs']=$this->db->get('joblist');
	// 	$val['file']='eprofile/edashboard_view';
	// 	echo Modules::run('template/layout1',$val);
	// }
	// public function editprofile()
	// {

	// 	$this->db->where('u_id',$this->session->userdata('u_id'));
	// 	$val['data']=$this->db->get('eprofile');
	// 	$val['file']='eprofile/editeprofile_view';
	// 	echo Modules::run('template/layout1',$val);
	// }

	// public function update()
	// {	

		// $data['email']=$_POST['email'];
		// $data['mobile']=$_POST['mobile'];
		// $data['about']=$_POST['about'];
		// $data['address']=$_POST['address'];
		// $data['website']=$_POST['website'];

		// $this->mdl_eprofile->update($data);
		// $this->session->set_flashdata('msg', '<b style="color:green;">Profile Updated successfully!</b>');
		// redirect('profile');

	// }

	
}
