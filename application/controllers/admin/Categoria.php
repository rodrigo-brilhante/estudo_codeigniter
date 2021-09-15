<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categoria extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('categorias_model', 'model_categorias');
		$this->categorias = $this->model_categorias->listar_categorias();
	}

	public function index(): void
	{
		$this->load->library('table');
		//carregando as categorias
		$dados['categorias'] = $this->categorias;

		//carregando informações do header
		$dados['titulo'] = 'Painel de Controle';
		$dados['subtitulo'] = 'Categoria';

		//carregando as paginas
		$this->load->view('backend/template/html-header', $dados);
		$this->load->view('backend/template/template');
		$this->load->view('backend/categoria');
		$this->load->view('backend/template/html-footer');
	}

	public function inserir(): void
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules(
			'txt-categoria',
			'Nome da Categoria',
			'required|min_length[3]|is_unique[categoria.titulo]'
		);
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			$titulo = $this->input->post('txt-categoria');
			if ($this->model_categorias->adicionar($titulo)) {
				redirect(base_url('admin/categoria'));
			} else {
				echo "Houve um erro no sistema!";
			}
		}
	}

	public function excluir($id)
	{
		if ($this->model_categorias->excluir($id)) {
			redirect(base_url('admin/categoria'));
		} else {
			echo "Houve um erro no sistema!";
		}
	}

	public function alterar($id)
	{
		$this->load->library('table');
		//carregando as categorias
		$dados['categorias'] = $this->model_categorias->listar_categoria($id);

		//carregando informações do header
		$dados['titulo'] = 'Painel de Controle';
		$dados['subtitulo'] = 'Categoria';

		//carregando as paginas
		$this->load->view('backend/template/html-header', $dados);
		$this->load->view('backend/template/template');
		$this->load->view('backend/alterar-categoria');
		$this->load->view('backend/template/html-footer');
	}

	public function salvar_alteracoes()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules(
			'txt-categoria',
			'Nome da Categoria',
			'required|min_length[3]|is_unique[categoria.titulo]'
		);
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			$titulo = $this->input->post('txt-categoria');
			$id = $this->input->post('txt-id');
			if ($this->model_categorias->alterar($titulo, $id)) {
				redirect(base_url('admin/categoria'));
			} else {
				echo "Houve um erro no sistema!";
			}
		}
	}
}
