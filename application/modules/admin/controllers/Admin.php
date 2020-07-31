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
	public function mentor()
	{
		
		$this->db->where('authorization',3);
		$val['mentor']=$this->db->get('user');
		$val['file']='admin/mentor_view';
		echo Modules::run('template/layout1',$val);
	}
	public function addskill()
	{
		$data['skname']=$_POST['skname'];
		$this->mdl_admin->addskill($data);
		$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert" id="msg_alert">
		Skills added Successfully.
		<span class="float-right" onclick="close_alert()">&times;</span>
		<style>
				.float-right{
						cursor:pointer;
				}
		</style>
		<script>
				function close_alert(){
						document.querySelector("#msg_alert").style.display="none";
				}
		</script>
		</div>');
		redirect('admin');

	}
	public function addindustry()
	{
		$data['iname']=$_POST['iname'];
		$this->mdl_admin->addindustry($data);
		$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert" id="msg_alert">
		Industries updated Successfully.
		<span class="float-right" onclick="close_alert()">&times;</span>
		<style>
				.float-right{
						cursor:pointer;
				}
		</style>
		<script>
				function close_alert(){
						document.querySelector("#msg_alert").style.display="none";
				}
		</script>
		</div>');
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

	public function dmentor()
	{

		
		$val['file']='admin/dmentor_view';
		$this->db->select('*');
		$this->db->from('mprofile');
		$this->db->join('user', 'user.u_id= mprofile.u_id');
		$this->db->join('skills', 'skills.sk_id= mprofile.skill');
		$id = $this->uri->segment(3);
		$this->db->where('mprofile.u_id',$id);
		$val['data']=$this->db->get();
		echo Modules::run('template/layout1',$val);
	}
	public function employeerstatus()
	{

		
		$u_id=$_POST['uid'];
		$data['status']=$_POST['status'];
		$this->mdl_admin->employeerupdate($data,$u_id);
		$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert" id="msg_alert">
		Employer\'s Status updated Successfully.
		<span class="float-right" onclick="close_alert()">&times;</span>
		<style>
				.float-right{
						cursor:pointer;
				}
		</style>
		<script>
				function close_alert(){
						document.querySelector("#msg_alert").style.display="none";
				}
		</script>
		</div>');
		redirect('admin/employeer');
	}
	public function mentorstatus()
	{

		
		$u_id=$_POST['uid'];
		$data['status']=$_POST['status'];
		$this->mdl_admin->mentorupdate($data,$u_id);
		$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert" id="msg_alert">
		Mentor\'s Status updated Successfully.
		<span class="float-right" onclick="close_alert()">&times;</span>
		<style>
				.float-right{
						cursor:pointer;
				}
		</style>
		<script>
				function close_alert(){
						document.querySelector("#msg_alert").style.display="none";
				}
		</script>
		</div>');
		redirect('admin/mentor');
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
