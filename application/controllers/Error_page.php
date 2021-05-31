<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Error_page extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Error";
        $this->load->view('tamplate/users/header_u', $data);
        $this->load->view('empty');
        $this->load->view('tamplate/users/footer_u');
    }
}

/* End of file Controllername.php */