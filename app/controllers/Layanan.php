<?php

class Layanan extends Controller {

    public function index() {
        $data['judul'] = 'Halaman Layanan';
		$data['layanan'] = $this->model('Layanan_model')->getAllLayanan();
		$this->view('templates/header',$data);
		$this->view('layanan/index',$data);
		$this->view('templates/footer');
    }

	public function cari()
    {
        $data['judul'] = 'Daftar Layanan';
        $data['mhs'] = $this->model('Layanan_model')->cariDataLayanan();
        $this->view('templates/header', $data);
        $this->view('layanan/index', $data);
        $this->view('templates/footer');
    }
}