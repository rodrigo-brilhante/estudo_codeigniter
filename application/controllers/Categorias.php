<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//carregando as categorias
		$this->load->model('categorias_model', 'modelcategorias');
		$this->categorias = $this->modelcategorias->listar_categorias();
	}

	public function index($id, $slug=null): void
	{
		$dados['categorias'] = $this->categorias;
		//carregando as ultimas publicações 
		$this->load->model('publicacoes_model', 'modelpublicacoes');
		$dados['publicacoes'] = $this->modelpublicacoes->categoria_publicada($id);

		//carregando informações do header
		$dados['titulo'] = 'Categorias';
		$dados['subtitulo'] = '';
		$dados['subtitulodb'] = $this->modelcategorias->listar_titulos($id);

		//carregando as paginas
		$this->load->view('frontend/template/html-header', $dados);
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/categoria');
		$this->load->view('frontend/template/aside');
		$this->load->view('frontend/template/footer');
		$this->load->view('frontend/template/html-footer');

	}

}
