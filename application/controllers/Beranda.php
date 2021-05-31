<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Beranda extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('simple_html_dom');
        $this->load->model('keyword_data');
        $this->load->helper('form');
    }
    public function index()
    {
        $data['title'] = "Beranda";
        $this->load->view('tamplate/users/header_u', $data);
        $this->load->view('beranda_v', $data);
        $this->load->view('tamplate/users/footer_u');
    }

    // public function uji()
    // {
    //     $result = array();
    //     foreach (range(101, 190) as $number) {
    //         $result[] = "https://sia.uty.ac.id/fotokecil/5170411" . $number . ".jpg";
    //         // echo '<a href="' . $link . '">' . $link . '</a>' . '<br>';
    //     }

    //     foreach ($result as $res) {
    //         echo '<img src="' . $res . '">';
    //     }
    // }

    //https://www.cnbcindonesia.com/market

}
