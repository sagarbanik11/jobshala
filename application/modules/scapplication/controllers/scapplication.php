<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Scapplication extends MX_Controller {
	function __construct() {
		
		$this->load->model('mdl_scapplication');
		// if(empty($_SESSION['u_id']))
		// redirect('login');
		// elseif($this->session->userdata['authorization']==2)
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
			$this->session->set_flashdata('msg', '<b style="color:green;">Status updated successfully!</b>');
			redirect('scapplication');
					
		
	}

	
}
