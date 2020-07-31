<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends MX_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model("Mdl_login","login"); 
    }

	public function index(){
		$val['file']='login/login_view';
		echo Modules::run('template/layout1',$val); 
        if($_POST) 
        {
            $result = $this->login->validate_user($_POST);
            if(!empty($result)) {
                $data = [
                    'u_id' => $result->u_id,
                    'email' => $result->email,
                    'authorization'=>$result->authorization,
                    'name'=>$result->name,
                    'status'=>$result->status,
                ];
 
                $this->session->set_userdata($data);
                if($this->session->userdata['authorization']==1 && $_SESSION['status']==1){
                    redirect('eprofile');
                }
                elseif($this->session->userdata['authorization']==2){
                    redirect('uprofile');
                }
                elseif($this->session->userdata['authorization']==3){
                    redirect('mprofile');
                }
                elseif($this->session->userdata['authorization']==0){
                    redirect('admin');
                }
                elseif($this->session->userdata['status']==0){
                    redirect('login/pending');
                }
                elseif($this->session->userdata['status']==2){
                redirect('login/declined');
            }
               
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger" id="msg_alert" role="alert">
                Please check the email/password once again.
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
                redirect('login');
            }
        }
    }
    public function pending()
	{

        $data = $this->session->all_userdata();
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
        $this->load->view('login/pending_view');
        
    }
    public function declined()
	{
        $data = $this->session->all_userdata();
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		$this->load->view('login/declined_view');
	}
    public function logout()  
    {  
        $data = $this->session->all_userdata();
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
        redirect('home');
    }  
}


