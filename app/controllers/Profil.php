<?php

class Profil extends Controller {

    public function index() {
        $data['judul'] = 'Halaman Profile';
		$id = 1;
		$data['customer'] = $this->model('Profil_model')->getCustomerById($id);
		$this->view('templates/header',$data);
		$this->view('profil/index',$data);
		$this->view('templates/footer');
    }

	
    // public function detail($id)
    // {
    //     $data['judul'] = 'Detail Mahasiswa';
    //     $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
    //     $this->view('templates/header', $data);
    //     $this->view('mahasiswa/detail', $data);
    //     $this->view('templates/footer');
    // }

    public function tambah()
    {
        if( $this->model('Customer_model')->tambahDataCustomer($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/profil');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/profil');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Customer_model')->hapusDataCustomer($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/profil');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/profil');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Customer_model')->getCustomerById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('Customer_model')->ubahDataCustomer($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/profil');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/profil');
            exit;
        } 
    }

}