<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Model {

    public function getAll($filter = []) {                
        $this->db->select()
            ->from('site')
            ->where($filter)
            ->order_by('nome');
        return $this->db->get()->result();
    }
}