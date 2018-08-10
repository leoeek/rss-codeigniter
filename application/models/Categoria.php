<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Model {

    public function getAll() {
        $this->db->select()
            ->from('categoria')
            ->order_by('nome');
        return $this->db->get()->result();
    }

    public function getById($id) {
        $this->db->select()        
            ->from('categoria')
            ->where('id', $id);
        return $this->db->get()->result_array();            
    }

    public function insert($dados) {
        $status = $this->db->insert('categoria', $dados);
        $id     = $this->db->insert_id();
        $response = [
            'status' => true,
            'item'   => $this->getById($id),
            'mensagem' => 'Inserido com sucesso!'
        ];
        return $response;
    }
}