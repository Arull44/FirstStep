<?php

class Customer extends Controller{
	public function index(){
		$data['judul'] = 'Customer';
        $data['customer'] = $this->model('Customer_model')->getAllCustomer();
		$this->view('/admin/templates/header',$data);
		$this->view('/admin/customer',$data);
		// $this->view('/admin/templates/footer');
	}
	
	public function cari()
    {
        $data['judul'] = 'Customer';
        $data['customer'] = $this->model('Customer_model')->cariDataCustomer();
        $this->view('admin/templates/header', $data);
        $this->view('admin/customer', $data);
        // $this->view('templates/footer');
    }

    public function hapus($id)
    {
        if( $this->model('Customer_model')->hapusDataCustomer($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/admin/customer');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/admin/customer');
            exit;
        }
    }

}