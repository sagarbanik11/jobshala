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

		$val['industry']=$this->db->get('industry');
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

		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('jid','Job Id','required');
		$this->form_validation->set_rules('role','Role','required');
		$this->form_validation->set_rules('location','Location','required');
		$this->form_validation->set_rules('industry','Industry','required');
		$this->form_validation->set_rules('description','Job Description','required');
		$this->form_validation->set_rules('requirement','Name','required');
	
		if ($this->form_validation->run() == FALSE)
		{
			
			$this->index();
		}
		else
		{
		    $data['u_id']=$this->session->userdata['u_id'];
			$data['job_id']=$_POST['jid'];
			$data['role']=$_POST['role'];
			$data['location']=$_POST['location'];
			$data['industry']=$_POST['industry'];
			$data['jdescription']=$_POST['description'];
			$data['jrequirement']=$_POST['requirement'];
			$data['date']= date('d-m-Y');
			$data['jlstatus']=1;

			$id=$this->mdl_addjob->add($data);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" id="msg_alert" role="alert">
			Job Added Successfully.
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
			redirect('eprofile/dashboard');

		}
	}




		
	public function edit()
	{	

		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('jid','Job Id','required');
		$this->form_validation->set_rules('role','Role','required');
		$this->form_validation->set_rules('location','Location','required');
		$this->form_validation->set_rules('description','Job Description','required');
		$this->form_validation->set_rules('requirement','Name','required');
	
		if ($this->form_validation->run() == FALSE)
		{
			
			$this->index();
		}
		else
		{
			$id=$_POST['jid'];
			$data['job_id']=$_POST['job_id'];
			$data['role']=$_POST['role'];
			$data['location']=$_POST['location'];
			$data['jdescription']=$_POST['description'];
			$data['jrequirement']=$_POST['requirement'];
			$data['jlstatus']=$_POST['status'];

			$this->mdl_addjob->update($data,$id);
			$this->session->set_flashdata('msg', '<div class="alert alert-success" id="msg_alert" role="alert">
			Job updated Successfully.
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
			redirect('eprofile/dashboard');
					

		}
	}



	
}
