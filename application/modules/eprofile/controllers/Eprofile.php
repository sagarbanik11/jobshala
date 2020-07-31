<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Eprofile extends MX_Controller {
	function __construct() {
		
		$this->load->model('mdl_eprofile');
		if(empty($_SESSION['u_id']))
		redirect('login');
		elseif($this->session->userdata['authorization']==2)
		redirect('home');
		}
	
	public function index()
	{

		$this->db->where('u_id',$this->session->userdata('u_id'));
		$val['data']=$this->db->get('eprofile');
		$val['file']='eprofile/eprofile_view';
		echo Modules::run('template/layout1',$val);
	}
	public function dashboard()
	{

		$this->db->where('u_id',$this->session->userdata('u_id'));
		$val['jobs']=$this->db->get('joblist');
		$val['file']='eprofile/edashboard_view';
		echo Modules::run('template/layout1',$val);
	}
	public function editprofile()
	{

		$this->db->where('u_id',$this->session->userdata('u_id'));
		$val['data']=$this->db->get('eprofile');
		$val['file']='eprofile/editeprofile_view';
		echo Modules::run('template/layout1',$val);
	}

	public function update()
	{	

	
		$data['about']=$_POST['about'];
		$data['address']=$_POST['address'];
		$data['website']=$_POST['website'];

		$this->mdl_eprofile->update($data);
		$this->session->set_flashdata('msg', '<div class="alert alert-success" id="msg_alert" role="alert">
		Profile Updated Successfully..
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
		redirect('eprofile');

	}

	
}