<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Japplication extends MX_Controller {
	function __construct() {
		
		$this->load->model('mdl_japplication');
		if(empty($_SESSION['u_id']))
		redirect('login');
		}
	
	public function apply()
	{
 
		$this->db->where('u_id',$this->session->userdata('u_id'));
		$val['data']=$this->db->get('uprofile');
		$id = $this->uri->segment(3);
		$this->db->where('j_id',$id);
		$val['qry']=$this->db->get('joblist');
		$val['file']='japplication/japplication_view';
		echo Modules::run('template/layout1',$val);
	}
	public function allview()
	{
		$this->db->select('*');
		$this->db->from('japplication');
		$this->db->join('joblist', 'joblist.j_id= japplication.j_id');
		$this->db->join('user', 'user.u_id= joblist.u_id');
		$this->db->where('japplication.u_id',$this->session->userdata('u_id'));
		$val['data']=$this->db->get();

		// $this->db->where('u_id',$this->session->userdata('u_id'));
		// $val['data']=$this->db->get('japplication');
		$val['file']='japplication/allapplication_view';
		echo Modules::run('template/layout1',$val);
	}
	public function save() 
	{
		$data['j_id']=$_POST['jid'];
		$data['u_id']=$this->session->userdata['u_id'];
		$data['name']=$_POST['name'];
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
		$data['adate']=date('Y-m-d H:i:s');
		$data['jstatus']=0;

		$this->mdl_japplication->apply($data);
		$this->session->set_flashdata('msg', '<b style="color:green;">Application successfully submitted!</b>');
		redirect('uprofile');
	}


	
}
