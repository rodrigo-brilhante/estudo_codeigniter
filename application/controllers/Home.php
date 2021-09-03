<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//carregando as categorias
		$this->load->model('categorias_model', 'modelcategorias');
		$this->categorias = $this->modelcategorias->listar_categorias();
	}

	public function index(): void
	{
		$dados['categorias'] = $this->categorias;
		//carregando as ultimas publicações 
		$this->load->model('publicacoes_model', 'modelpublicacoes');
		$this->publicacoes = $this->modelpublicacoes->destaques_home();
		$dados['publicacoes'] = $this->publicacoes;

		//carregando as paginas
		$this->load->view('frontend/template/html-header', $dados);
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/home');
		$this->load->view('frontend/template/aside');
		$this->load->view('frontend/template/footer');
		$this->load->view('frontend/template/html-footer');

	}

}
