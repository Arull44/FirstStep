<?php 
if ( isset($_SESSION['admin']) ) {
    header('Location: '.BASEURL.'/admin/dashboard');
    exit;
} 

class Login extends Controller {
    public function index() {
        $data['judul'] = 'Login';
        $this->view('/admin/login', $data);
    }

    public function do() {
        $result = $this->model('Admin_model')->getAdminByUsername($_POST);

        $username = $result['username'];
        $userpass = $result['password'];

        $hashPass = password_hash($userpass, PASSWORD_DEFAULT);
        if ( $_POST['username'] === $username) {
            if ( $_POST['password'] === $userpass) {
                if (password_verify($userpass, $hashPass)) {
                    if( isset($_POST['rememberMe']) ){
                    
                        $value = $hashPass;
                        setcookie ("rememberMe",$value,time()+ (360)); 
                    }

                    $_SESSION['admin'] = [
                        'id_admin' => $result['id_admin'],
                        'username' => $result['username'],
                        'nama_admin' => $result['nama_admin'],
                    ];
        
                    header('Location: '.BASEURL.'/admin/dashboard');
                    exit;
                } else {
                    Flasher::setFlash('Gagal,', 'Password tidak Sesuai', 'danger');
                    header('Location: '.BASEURL.'/admin');
                    exit;
                }
            } else {
                Flasher::setFlash('Gagal,', 'Password tidak Sesuai', 'danger');
                header('Location: '.BASEURL.'/admin');
                exit;
            }
        } else {
            Flasher::setFlash('Gagal,', 'Username tidak Sesuai', 'danger');
            header('Location: '.BASEURL.'/admin');
            exit;
        }
    }
}