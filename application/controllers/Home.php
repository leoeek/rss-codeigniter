<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('Categoria', 'CategoriaModel');
        $this->load->model('Site', 'SiteModel');
	}

	public function index() {
		$js['js']           = $this->load->view('js/main.js', '', TRUE);        
		
		$lista = $this->CategoriaModel->getAll();
		$novo = [];
		foreach ($lista as $item) {

			$categorias = $this->SiteModel->getAll(['fk_categoria' => $item->id]);
			$dados = '';
			foreach($categorias as $c) {
				$dados .= '<a href="#" class="btn btn-primary">' . $c->nome . '</a>';
			}

			$t = [
				'id' => $item->id,
				'nome' => $item->nome,
				'sites' => $dados,
			];
			
			array_push($novo, $t);
		}
		$dados['lista'] = $novo;
		$this->load->view('include/cabecalho')
					->view('home', $dados)
					->view('include/rodape', $js);
	}

	public function categoria_gravar() {
		$retorno = [
			'status' => FALSE,
			'mensagem' => 'Erro ao gravar os dados.'
		];

		if ($this->input->post('id')) {
			$id = (int) $this->input->post('id');
		}
		$dados['nome'] = $this->input->post('categoria');
		
		$retorno = $this->CategoriaModel->insert($dados);
		echo json_encode($retorno);
	}

	public function rss($id) {
		$id = (int) $id;
		$retorno = [
			'status' => TRUE,
			'mensagem' => '',
			'dados' => [],
		];

		$lista = $this->SiteModel->getAll(['fk_categoria' => $id]);
		$dados = '';
		foreach($lista as $item) {
			$dados .= '
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">' . $item->nome . '</h5>
						<p><b>'.  $item->dt_sincronismo . '</b></p>
						<p class="card-text">' . $item->nome . '</p>
						<a href="#" class="btn btn-primary">' . $item->url . '</a>
					</div>
				</div>					
			';
		}

		$retorno['dados'] = $dados;
		echo json_encode($retorno);
	}
}
