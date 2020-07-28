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
		$val['jobs']=$this->db->get('joblist');
		$val['file']='eprofile/eprofile_view';
		echo Modules::run('template/layout1',$val);
	}
	public function add()
	{	

	}

	
}
