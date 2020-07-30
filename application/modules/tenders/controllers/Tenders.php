<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Tenders extends MX_Controller {
	function __construct() {
		
		$this->load->model('mdl_tenders');
		// if(empty($_SESSION['u_id']))
		// redirect('login');
		// elseif($this->session->userdata['authorization']==2)
		// redirect('home');
		}
	

	public function index()
	{

		$this->db->select('*');
		$this->db->from('joblist');
		$this->db->join('user', 'user.u_id= joblist.u_id');
		$val['jobs']=$this->db->get();
		$val['file']='joblist/joblist_view';
		echo Modules::run('template/layout1',$val);
	}
	public function single()
	{

		
		$val['file']='joblist/singlepost_view';
		$this->db->select('*');
		$this->db->from('joblist');
		$this->db->join('user', 'user.u_id= joblist.u_id');
		$id = $this->uri->segment(3);
        $this->db->where('j_id',$id); 
		$val['jobs']=$this->db->get();
		echo Modules::run('template/layout1',$val);
	}
	public function add()
	{	

		$config['upload_path'] = 'assets/img/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['max_size'] = "2048000"; 
		$config['max_height'] = "2000";
		$config['max_width'] = "2000";
		$config['file_name'] = date('ymdhis').$this->session->userdata('u_id').$this->input->post('id');
		
		$this->load->library('upload', $config);

		$this->upload->initialize($config);

		if ($this->upload->do_upload('upload')){
			$upload_data = $this->upload->data();
			$data['image']=$upload_data['file_name'];
			$data['u_id']=$this->session->userdata['u_id'];
			$data['iname']=$_POST['name'];
			$data['category']=$_POST['category'];
			$data['price']=$_POST['price'];
			$id=$this->mdl_additem->add($data);
			$this->session->set_flashdata('msg', '<b style="color:green;">Item added in your menu successfully!</b>');
			redirect('additem');
					
			}
			else{
				$this->session->set_flashdata( 'error_msg', $this->upload->display_errors());
				redirect('additem');
					
			} 

		redirect('additem'); 
	}

	
}
