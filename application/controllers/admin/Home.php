<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index(): void
	{
		//carregando informações do header
		$dados['titulo'] = 'Painel de Controle';
		$dados['subtitulo'] = 'Home';

		//carregando as paginas
		$this->load->view('backend/template/html-header', $dados);
		$this->load->view('backend/template/template');
		$this->load->view('backend/home');
		$this->load->view('backend/template/html-footer');

	}

}
