<?php

class Profil extends Controller {

    public function index() {
        $data['judul'] = 'Halaman Profile';
		$data['customer'] = $this->model('Profil_model')->getAllCustomer();
		$this->view('templates/header',$data);
		$this->view('profil/index',$data);
		$this->view('templates/footer');
    }
}