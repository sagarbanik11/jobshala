<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_eprofile extends MX_Controller {
    private $table;
    function __construct(){
        parent::__construct();
        $this->table='eprofile';
    }
    
    function update($data){
        $this->db->where('u_id',$this->session->userdata('u_id'));
        return $this->db->update($this->table, $data);
    }
    
    
}