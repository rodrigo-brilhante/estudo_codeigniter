<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sobrenos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('categorias_model', 'modelcategorias');
		$this->categorias = $this->modelcategorias->listar_categorias();
        $this->load->model('usuarios_model', 'model_usuario');

	}

    public function index()
	{
		//carregando as categorias
		$dados['categorias'] = $this->categorias;
        //carregando autores
        $dados['autores'] = $this->model_usuario->listar_autores();

		//carregando informações do header
		$dados['titulo'] = 'Sobre nós';

		//carregando as paginas
		$this->load->view('frontend/template/html-header', $dados);
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/sobrenos');
		$this->load->view('frontend/template/aside');
		$this->load->view('frontend/template/footer');
		$this->load->view('frontend/template/html-footer');

	}

    public function autores($id, $slug=null)
    {
        $dados['categorias'] = $this->categorias;
        //carregando autores
        $dados['autores'] = $this->model_usuario->listar_autor($id);

		//carregando informações do header
		$dados['titulo'] = 'Sobre nós';
		$dados['subtitulo'] = 'Autor';

		//carregando as paginas
		$this->load->view('frontend/template/html-header', $dados);
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/autor');
		$this->load->view('frontend/template/aside');
		$this->load->view('frontend/template/footer');
		$this->load->view('frontend/template/html-footer');
    }

}
