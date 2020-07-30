<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_scapplication extends MX_Controller {
    private $table;
    function __construct(){
        parent::__construct();
        $this->table='japplication';
    }
    
    function update($data,$jobid){
        $this->db->where('ja_id',$jobid);
        return $this->db->update($this->table, $data);
    }
    
    
}