<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_japplication extends MX_Controller {
    private $table;
    function __construct(){
        parent::__construct();
        $this->table='japplication';
    }
    
    function apply($data){
        $this->db->insert($this->table,$data);
        return $this->db->insert_id();
    }
    
    
}