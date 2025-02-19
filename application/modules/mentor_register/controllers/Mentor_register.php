<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mentor_Register extends MX_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model('mdl_mentor_register');
		{
			if(!empty($_SESSION['u_id']))
			redirect('home');
			
			}
	}
	
	  

	public function index()
	{
		$val['data']=$this->db->get('skills');
		$val['file']='mentor_register/mentor_register_view';
		echo Modules::run('template/layout1',$val);
	}
	public function save()
	{
		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','valid_email|required|is_unique[user.email]',array('is_unique' => 'This %s already exists.'));
		$this->form_validation->set_rules('mobile','Mobile Number','numeric|is_unique[user.mobile]',array('is_unique' => 'This %s already exists.'));
		$this->form_validation->set_rules('password','Password','required|matches[password]');
		$this->form_validation->set_rules('confirmpassword','Confirm Password','required|matches[password]');

		if ($this->form_validation->run() == FALSE)
		{
			
			$this->index();
		}
		else
		{
		    $data['name']=$_POST['name'];
			$data['email']=$_POST['email'];
			$data['mobile']=$_POST['mobile'];
			$data['password']=md5($_POST['password']);
			$data['authorization']=3; 

			$data1['u_id']=$this->mdl_mentor_register->add($data);
			$data1['email']=$_POST['email'];
			$data1['mobile']=$_POST['mobile'];
			$data1['skill']=$_POST['skill'];
			$id=$this->mdl_mentor_register->addeprofile($data1);
			$this->session->set_flashdata('msg', '<b style="color:green;">Congratulations!, Your registration was successful as a Mentor, login after verification</b>');
		    redirect('login'); 

		}
	}
}
