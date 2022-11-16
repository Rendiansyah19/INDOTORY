<?php
// define('BASE_PATH') of 
    class IndexController extends CI_Controller {
        public function index()
        {
            $this->load->view('login');
        }

        public function home() {
            $this->load->view("home");
        }
    }
?>