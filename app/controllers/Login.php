<?php 
if ( isset($_SESSION['username']) ) {
    header('Location: '.BASEURL.'/home');
    exit;
} 

class Login extends Controller {
    public function index() {
        $data['title'] = 'Login';
        $this->view('/login', $data);
    }

    public function do() {
        $result = $this->model('Customer_model')->getCustomerByUsername($_POST);
        $username = $_POST['username'];
        $userpass = $_POST['password'];

        if (password_verify($userpass, $result['password'] )) {
            $_SESSION['admin'] = [
                'id_customer' => $result['id_customer'],
                'username' => $result['username'],
                'nama_customer' => $result['nama_customer'],
            ];
            header('Location: '.BASEURL.'/home');
            exit;
        } 
        else {
            $_SESSION['username'] = $_POST['username'];
            Flasher::setFlash('Gagal,', 'Username dan Password tidak Sesuai', 'danger');
            header('Location: '.BASEURL.'/');
            exit;
        }
    }
}