<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Scapplication extends MX_Controller {
	function __construct() {
		
		$this->load->model('mdl_scapplication');
		if(empty($_SESSION['u_id']))
		redirect('login');
		// elseif($_SESSION['authorization']==3)
		// redirect('home');
		}
	

	public function index()
	{

		$this->db->select('*');
		$this->db->from('japplication');
		$this->db->join('joblist', 'joblist.j_id= japplication.j_id' );
		$this->db->where('joblist.u_id',$this->session->userdata('u_id'));
		$val['data']=$this->db->get();
		$val['file']='scapplication/scapplication_view';
		echo Modules::run('template/layout1',$val);
	}

	public function mapplication()
	{

		$this->db->select('*');
		$this->db->from('mapplication');
		$this->db->join('user', 'user.u_id= mapplication.a_id');
		$this->db->where('mapplication.m_id',$this->session->userdata('u_id'));
		$val['data']=$this->db->get();
		$val['file']='scapplication/smapplication_view';
		echo Modules::run('template/layout1',$val);
	}
	public function single()
	{

	
			$val['file']='scapplication/dapplication_view';
			$id = $this->uri->segment(3);
			$this->db->where('ja_id',$id); 
			$val['data']=$this->db->get('japplication');
			echo Modules::run('template/layout1',$val);
	
	}
	public function status()
	{	

			$jobid=$_POST['jobid'];
			$data['jstatus']=$_POST['status'];
			$this->mdl_scapplication->update($data,$jobid);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" id="msg_alert" role="alert">
			Status changed.
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
			redirect('scapplication');
					
		
	}

	
}
