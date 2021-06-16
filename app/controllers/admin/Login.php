<?php 
if ( isset($_SESSION['admin']) ) {
    header('Location: '.BASEURL.'/admin/dashboard');
    exit;
} 

class Login extends Controller {
    public function index() {
        $data['title'] = 'Login';
        $this->view('/admin/login', $data);
    }

    public function do() {
        $result = $this->model('Admin_model')->getAdminByUsername($_POST);
        $username = $_POST['username'];
        $userpass = $_POST['password'];

        if (password_verify($userpass, $result['password'] )) {
            $_SESSION['admin'] = [
                'id_admin' => $result['id_admin'],
                'username' => $result['username'],
                'nama_admin' => $result['nama_admin'],
            ];
            header('Location: '.BASEURL.'/admin/dashboard');
            exit;
        } 
        else {
            $_SESSION['username'] = $_POST['username'];
            Flasher::setFlash('Gagal,', 'Username dan Password tidak Sesuai', 'danger');
            header('Location: '.BASEURL.'/admin');
            exit;
        }
    }
}