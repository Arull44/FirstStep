<?php 
if ( isset($_SESSION['admin']) ) {
    header('Location: '.BASE_URL.'admin/dashboard');
    exit;
} 

class Login extends Controller {
    public function index() {
        $data['title'] = 'Login';
        $this->view('admin/login', $data);
    }

    public function do() {
        $result = $this->model('Admin_model')->getAdminByUsername($_POST);
        if ( password_verify($_POST['password'], $result['password'])) {
            $_SESSION['admin'] = [
                'id_admin' => $result['id_admin'],
                'username' => $result['username'],
                'nama_admin' => $result['nama_admin'],
            ];
            header('Location: '.BASE_URL.'admin/dashboard');
            exit;
        } else {
            $_SESSION['username'] = $_POST['username'];
            Flasher::setFlash('Gagal,', 'Username dan Password tidak Sesuai, Silahkan Meminta Konfirmasi Admin untuk hal ini', 'danger');
            header('Location: '.BASE_URL.'admin/');
            exit;
        }
    }
}