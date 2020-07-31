<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_user_register extends MX_Controller {
    private $table;
    function __construct(){
        parent::__construct();
        $this->table1='user';
        $this->table2='uprofile';
    }
    
    function add($data){
        $this->db->insert($this->table1,$data);
        return $this->db->insert_id();
    }
    function adduprofile($data1){
        $this->db->insert($this->table2,$data1);
        return $this->db->insert_id();
    }
    
    
}