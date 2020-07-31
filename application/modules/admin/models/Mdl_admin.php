<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_admin extends MX_Controller {
    private $table;
    function __construct(){
        parent::__construct();
    }
    
    function addskill($data){
        $this->db->insert('skills',$data);
        return $this->db->insert_id();
    }
    function addindustry($data){
        $this->db->insert('industry',$data);
        return $this->db->insert_id();
    }
    function employeerupdate($data,$u_id){
        $this->db->where('u_id',$u_id);
        return $this->db->update('user', $data);
    }
    function mentorupdate($data,$u_id){
        $this->db->where('u_id',$u_id);
        return $this->db->update('user', $data);
    }
    
    
    
}