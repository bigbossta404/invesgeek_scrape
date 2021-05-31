<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keyword_data extends CI_Model
{
    public function get_kw($terms)
    {
        foreach ($terms as $term) {
            $this->db->select('key');
            $this->db->from('kw_res');
            $this->db->or_like('key', $term);
            $res = $this->db->get();
            return $res->result_array();
        }
    }
}
