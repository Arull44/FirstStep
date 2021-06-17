<?php 

class Logout extends Controller {

    public function index() {
        unset($_SESSION['admin']);
        session_destroy();

        // Remove cookie variables
        setcookie ("rememberMe","", time() - (3600) );

        header('Location: '.BASEURL.'/admin');
    }
}