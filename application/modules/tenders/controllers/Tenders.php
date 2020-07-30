<?php defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
class Tenders extends MX_Controller {

	public function index()
	{
		$val['file']='tenders/tenders_view';
		$api_data['name']='Hello';
		echo Modules::run('template/layout1',$val);
	}

	
}
