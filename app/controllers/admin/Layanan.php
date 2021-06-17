<?php

class Layanan extends Controller {

    public function index() {
        $data['judul'] = 'Layanan';
		$data['layanan'] = $this->model('Layanan_model')->getAllLayanan();
		$this->view('admin/templates/header',$data);
		$this->view('admin/layanan',$data);
        $this->view('admin/templates/footer', $data);
    }

	public function cari()
    {
        $data['judul'] = 'Halaman Layanan';
        $data['layanan'] = $this->model('Layanan_model')->cariDataLayanan();
        $this->view('admin/templates/header', $data);
        $this->view('admin/layanan', $data);
        $this->view('admin/templates/footer', $data);
    }

    
    public function tambah()
    {
        if( $this->model('Layanan_model')->tambahDataLayanan($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/admin/layanan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/admin/layanan');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Layanan_model')->hapusDataLayanan($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/admin/layanan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/admin/layanan');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Layanan_model')->getLayananById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('Layanan_model')->ubahDataLayanan($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/admin/layanan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/admin/layanan');
            exit;
        } 
    }
}