<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Result_c extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('simple_html_dom');
        // $this->load->library("pagination");
        $this->load->model('keyword_data');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    public function index()
    {
        $data['links'] = array(
            'https://www.suara.com/bisnis/bisnis-category/keuangan',
            'https://market.bisnis.com',
            'https://www.cnnindonesia.com/ekonomi/bisnis',
            'https://finance.detik.com/market-research?tag_from=wp_finance_secondnav_Market%20Research'
        );
        $data['inputcari'] = $this->input->post('inputcari');
        $data['terms'] = explode(' ', $data['inputcari']);
        foreach ($data['terms'] as $term) {
            foreach ($data['links'] as $link) {
                $html = file_get_html($link);
                foreach ($html->find('div[class="item-content item-right"], div[class="col-custom left"]') as $konten) {
                    foreach ($konten->find('h4,h2') as $tags) {
                        foreach ($tags->find('a') as $urls) {
                            if (stripos($tags->plaintext, $term) !== false) {
                                $row['judul'] = $tags->plaintext; {
                                }
                                $row['url'] = $urls->href;

                                $result[] = $row;
                                break;
                            }
                        }
                    }
                }
            }
        }

        // foreach ($result as $res) {
        //     echo $res['judul'] . '<br>';
        //     echo $res['url'] . '<br>';
        // }
        // $result = array_unique($result, SORT_REGULAR);
        // foreach ($result as $res) {
        //     print_r($res) . '<br>';
        // }
        // $property_types = array();
        // foreach ($data['res'] as $filter_result) {
        //     if (in_array($filter_result[], $property_types)) {
        //         continue;
        //     }
        //     $property_types[] = $filter_result;
        //     echo $filter_result['judul'] . '<br>';
        //     echo $filter_result['url'] . '<br>';
        // }

        if (empty($result)) {
            $data['title'] = "Error";
            $this->load->view('tamplate/users/header_u', $data);
            $this->load->view('errors/empty');
            $this->load->view('tamplate/users/footer_u');
        } else {
            $data['res'] = $result;
            $data['keyword'] = $this->keyword_data->get_kw($data['terms']);
            $data['title'] = "Beranda";
            $this->load->view('tamplate/users/header_u', $data);
            $this->load->view('result', $data);
            $this->load->view('tamplate/users/footer_u');
        }
    }
}

/* End of file Controllername.php */
