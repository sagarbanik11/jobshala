<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Uprofile extends MX_Controller {
	function __construct() {
		
		$this->load->model('mdl_uprofile');
		if(empty($_SESSION['u_id']))
		redirect('login');
		}
	

	public function index()
	{
		$this->db->select('*');
		$this->db->from('uprofile');
		$this->db->join('user', 'user.u_id= uprofile.u_id');
		$this->db->where('uprofile.u_id',$this->session->userdata('u_id'));
		$val['data']=$this->db->get();
		$val['file']='uprofile/uprofile_view';
		echo Modules::run('template/layout1',$val);
	}
	public function editview()
	{
 
		$this->db->where('u_id',$this->session->userdata('u_id'));
		$val['data']=$this->db->get('uprofile');
		$val['file']='uprofile/edituprofile_view';
		echo Modules::run('template/layout1',$val);
	}
	public function edit() 
	{
 
		
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

		$this->mdl_uprofile->update($data);
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
		redirect('uprofile');
	}

	public function pdf() 
	{
 

		$this->load->view('uprofile/resume_view');
        
        // Get output html
        $html = $this->output->get_output();
        
        // Load pdf library
        $this->load->library('pdf');
        
        // Load HTML content
        $this->dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation
        $this->dompdf->setPaper('A4', 'portait');
        
        // Render the HTML as PDF
        $this->dompdf->render();
        
        // Output the generated PDF (1 = download and 0 = preview)
        $this->dompdf->stream("resume.pdf", array("Attachment"=>0));

	}


	
}
