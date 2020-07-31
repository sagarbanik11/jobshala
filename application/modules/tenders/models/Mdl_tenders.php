<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_tenders extends MX_Controller {
    private $table;
    function __construct(){
        parent::__construct();
        $this->table='tenders';
    }
    
    // function add($data){
    //     $this->db->insert($this->table,$data);
    //     return $this->db->insert_id();
    // }
    
    
}