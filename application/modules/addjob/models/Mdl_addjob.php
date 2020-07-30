<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_addjob extends MX_Controller {
    private $table;
    function __construct(){
        parent::__construct();
        $this->table='joblist';
    }
    
    function add($data){
        $this->db->insert($this->table,$data);
        return $this->db->insert_id();
    }
    function update($data,$id){
        $this->db->where('j_id',$id);
        return $this->db->update($this->table, $data);
    }
    
    
}