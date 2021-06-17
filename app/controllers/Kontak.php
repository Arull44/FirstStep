<?php

class Kontak extends Controller{
	public function index(){
		$data['judul'] = 'Kontak';
		$this->view('templates/header',$data);
		$this->view('kontak/index',$data);
		$this->view('templates/footer');
	}

    public function tambah()
    {
        if( $this->model('Customer_model')->tambahDataCustomer($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/kontak');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/kontak');
            exit;
        }
    }
}