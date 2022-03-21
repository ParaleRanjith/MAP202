<?php

class Register extends Controller {

    public function index() {
            $this->view('register/index');
    }

    public function verify() {
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        $user = $this->model('User');

        $user_check = $user->check_username($username);


        if ($user_check ==1) {
            $_SESSION ['usernameCheck'] = 1;
            header('location:/register');
            die;
                
        }

        if(($username == $password)) {
        header('location:/register');
        die;

        }

        if(strlen($password) < 4) {
            header('location:/register');
            die;
            }


        $user->register($username, $password);
        $_SESSION ['register'] = 1;
            header('location:/login');
            die;   
    }
}

     	 