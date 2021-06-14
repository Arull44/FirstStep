<?php

class Dashboard extends Controller{
	public function index(){
		$data['judul'] = 'Dashboard';
        // $data['layanan'] = $this->model('Layanan_model')->getAllLayanan();
		$this->view('admin/templates/header',$data);
		$this->view('admin/dashboard/index',$data);
		$this->view('admin/templates/footer');
	}

}