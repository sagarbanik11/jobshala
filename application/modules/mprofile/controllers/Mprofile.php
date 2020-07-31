<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mprofile extends MX_Controller {
	function __construct() {
		
		$this->load->model('mdl_mprofile');
		if(empty($_SESSION['u_id']))
		redirect('login');
		elseif($_SESSION['authorization']==2 && $_SESSION['authorization']==1 )
		redirect('home');
		}
	
	public function index()
	{

		$this->db->select('*');
		$this->db->from('mprofile');
		$this->db->join('user', 'user.u_id= mprofile.u_id');
		$this->db->join('skills', 'skills.sk_id= mprofile.skill');
		$this->db->where('mprofile.u_id',$this->session->userdata('u_id'));
		$val['data']=$this->db->get();
		$val['file']='mprofile/mprofile_view';
		echo Modules::run('template/layout1',$val);
	}
	// public function dashboard()
	// {

	// 	$this->db->where('u_id',$this->session->userdata('u_id'));
	// 	$val['jobs']=$this->db->get('joblist');
	// 	$val['file']='eprofile/edashboard_view';
	// 	echo Modules::run('template/layout1',$val);
	// }
	public function editprofile()
	{

		$this->db->where('u_id',$this->session->userdata('u_id'));
		$val['data']=$this->db->get('mprofile');
		$val['file']='mprofile/editeprofile_view';
		echo Modules::run('template/layout1',$val);
	}

	public function update()
	{	

		$data['email']=$_POST['email'];
		$data['mobile']=$_POST['mobile'];
		$data['about']=$_POST['about'];
		$data['website']=$_POST['website'];

		$this->mdl_mprofile->update($data);
		$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
			Profile updated Successfully.
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
		redirect('mprofile');

	}

	
}
