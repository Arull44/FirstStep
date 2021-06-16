<?php

class Pesanan extends Controller {

    public function index() {
        $data['judul'] = 'Halaman Pesanan';
		$data['pesanan'] = $this->model('Pesanan_model')->getAllPesanan();
		$this->view('admin/templates/header',$data);
		$this->view('admin/pesanan',$data);
        $this->view('admin/templates/footer', $data);
    }

	public function cari()
    {
        $data['judul'] = 'Halaman Pesanan';
        $data['pesanan'] = $this->model('Pesanan_model')->cariDataPesanan();
        $this->view('admin/templates/header', $data);
        $this->view('admin/pesanan', $data);
        $this->view('admin/templates/footer', $data);
    }

}