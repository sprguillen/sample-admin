<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // libraries
        $this->load->library('session');

        // helpers
        $this->load->helper('url');
    }

    public function index() {
        // $user = $this->session->userdata('user');
        // if (!$user) {
        //     redirect('login', 'refresh');
        // }
    }

    public function login() {
        $this->render_view('login');
    }

    public function render_view($template_name = null, $data = array()) {
        $full_path = 'admin/' . $template_name;
        $this->load->view('header');
        $this->load->view($full_path, $data);
        $this->load->view('footer');
    }
}