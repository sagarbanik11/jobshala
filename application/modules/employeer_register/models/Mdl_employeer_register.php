<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_employeer_register extends MX_Controller {
    private $table;
    function __construct(){
        parent::__construct();
        $this->table='user';
    }
    
    function add($data){
        $this->db->insert($this->table,$data);
        return $this->db->insert_id();
    }
    function addeprofile($data1){
        $this->db->insert('eprofile',$data1);
        return $this->db->insert_id();
    }
    
    
}