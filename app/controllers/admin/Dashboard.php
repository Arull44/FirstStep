<?php

class Dashboard extends Controller{
	public function index(){
		$data['judul'] = 'Dashboard';
		$this->view('/admin/templates/header',$data);
		$this->view('/admin/dashboard',$data);
		// $this->view('/admin/templates/footer');
	}

}