<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        //load view form login
        $this->load->view('template/header');
        $this->load->view('v_dashboard');
        $this->load->view('template/footer');
    }
  
    public function logout()
    {
        //hapus session
        $this->session->sess_destroy();

        redirect('/login');
    }

}