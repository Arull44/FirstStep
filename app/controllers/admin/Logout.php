<?php 

class Logout extends Controller {

    public function index() {
        unset($_SESSION['admin']);
        session_destroy();
        header('Location: '.BASEURL.'/admin');
    }
}