<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends MX_Controller {

	public function index()
	{	
		
		$val['title']='Home';
		$val['file']='home/home_view';
		echo Modules::run('template/layout1',$val);
	}
	
}
