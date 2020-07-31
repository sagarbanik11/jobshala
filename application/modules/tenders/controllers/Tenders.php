<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Tenders extends MX_Controller {
	function __construct() {
		
		$this->load->model('mdl_tenders');
	
		}
	

	public function index()
	{

	
		$val['file']='tenders/tenderlist_view';
		echo Modules::run('template/layout1',$val);
	}

	
}
