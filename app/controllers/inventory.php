<?php

class Inventory extends Controller {

    public function index() {

	    $this->view('inventory/index');
	    die;
    }


    public function admin(){
        if($_SESSION['role'] != 3) {
            $_SESSION['roleMessage'] = 'You do not have access to this page. If this is an error, Please contact IT.';
            header("location:/inventory");
        }

        $this->view('inventory/admin');
	    die;
    }

    public function manager(){
        if($_SESSION['role'] == 1) {
            $_SESSION['roleMessage'] = 'You do not have access to this page. If this is an error, Please contact IT.';
            header("location:/inventory");
        }

        $this->view('inventory/manager');
	    die;
    }

    public function staff(){
        
        $this->view('inventory/staff');
	    die;
    }

}
