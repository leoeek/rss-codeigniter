<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$feed = file_get_contents('http://www.leonardoprocopio.com/blog/feed/');
		$rss = new SimpleXmlElement($feed);
		$dados['lista'] = [];
		foreach($rss->channel->item as $entrada) {
			$lista = [
				'title' => $entrada->title,
				'data'  => $entrada->pubDate,	
				'descricao' => $entrada->description,
				'link'      => $entrada->link
			];
			array_push($dados['lista'], $lista);
		}

		$this->load->view('home', $dados);
	}
}
