<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Addjob extends MX_Controller {
	function __construct() {
		
		$this->load->model('mdl_addjob');
		if(empty($_SESSION['u_id']))
		redirect('login');
		elseif($this->session->userdata['authorization']==2)
		redirect('home');
		}
	

	public function index()
	{

		$this->db->where('u_id',$this->session->userdata('u_id'));
		$val['jobs']=$this->db->get('joblist');
		$val['file']='addjob/addjob_view';
		echo Modules::run('template/layout1',$val);
	}
	public function editview()
	{

		$id = $this->uri->segment(3);
        $this->db->where('j_id',$id); 
		$val['jobs']=$this->db->get('joblist');
		$val['file']='addjob/editjob_view';
		echo Modules::run('template/layout1',$val);
	}
	public function add()
	{	
			$data['u_id']=$this->session->userdata['u_id'];
			$data['job_id']=$_POST['jid'];
			$data['role']=$_POST['role'];
			$data['location']=$_POST['location'];
			$data['industry']=$_POST['industry'];
			$data['jdescription']=$_POST['description'];
			$data['jrequirement']=$_POST['requirement'];
			$data['date']= date('d-m-Y');
			$data['status']=1;

			$id=$this->mdl_addjob->add($data);
			$this->session->set_flashdata('msg', '<b style="color:green;">Job added successfully!</b>');
			redirect('eprofile/dashboard');
	}
	public function edit()
	{	
			$id=$_POST['jid'];
			$data['job_id']=$_POST['job_id'];
			$data['role']=$_POST['role'];
			$data['location']=$_POST['location'];
			$data['jdescription']=$_POST['description'];
			$data['jrequirement']=$_POST['requirement'];
			$data['status']=$_POST['status'];

			$this->mdl_addjob->update($data,$id);
			$this->session->set_flashdata('msg', '<b style="color:green;">Job updated successfully!</b>');
			redirect('eprofile/dashboard');
					
	}

	
}
