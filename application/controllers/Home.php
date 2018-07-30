<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('Categoria', 'CategoriaModel');
	}

	public function index() {
		$js['js']           = $this->load->view('js/main.js', '', TRUE);        
		// $feed = file_get_contents('http://www.leonardoprocopio.com/blog/feed/');
		// $rss = new SimpleXmlElement($feed);
		$dados['lista'] = $this->CategoriaModel->getAll();
		// foreach($rss->channel->item as $entrada) {
		// 	$lista = [
		// 		'title' => $entrada->title,
		// 		'data'  => $entrada->pubDate,	
		// 		'descricao' => $entrada->description,
		// 		'link'      => $entrada->link
		// 	];
		// 	array_push($dados['lista'], $lista);
		// }

		$this->load->view('include/cabecalho')
					->view('home', $dados)
					->view('include/rodape', $js);
	}

	public function categoria_gravar() {
		$retorno = [
			'status' => FALSE,
			'mensagem' => 'Erro ao gravar os dados.'
		];

		echo json_encode($retorno);
	}
}
