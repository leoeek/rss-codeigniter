<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Model {

    public function getAll() {
        $this->db->select()
            ->from('categoria')
            ->order_by('nome');
        return $this->db->get()->result();
    }
}