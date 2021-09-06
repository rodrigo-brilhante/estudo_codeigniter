<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postagens extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//carregando as categorias
		$this->load->model('categorias_model', 'modelcategorias');
		$this->categorias = $this->modelcategorias->listar_categorias();
	}

	public function index($id, $slug=null)
	{
		$dados['categorias'] = $this->categorias;
		//carregando publicação 
		$this->load->model('publicacoes_model', 'modelpublicacoes');
		$dados['publicacoes'] = $this->modelpublicacoes->publicacao($id);

		//carregando informações do header
		$dados['titulo'] = 'Publicação';
		$dados['subtitulo'] = '';
		$dados['subtitulodb'] = $this->modelpublicacoes->listar_titulos($id);

		//carregando as paginas
		$this->load->view('frontend/template/html-header', $dados);
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/publicacao');
		$this->load->view('frontend/template/aside');
		$this->load->view('frontend/template/footer');
		$this->load->view('frontend/template/html-footer');

	}

}
