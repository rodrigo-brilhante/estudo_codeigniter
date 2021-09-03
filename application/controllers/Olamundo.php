<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Olamundo extends CI_Controller {
	public function index(): void
	{
        $dados['mensagem'] = 'ola mundo!';
		$this->load->view('olamundo', $dados);
	}

	public function teste(): void
	{
		$dados['mensagem'] = 'testando';
		$this->load->view('olamundo', $dados);
	}

	public function testedb(): void
	{
		$dados['mensagem'] = $this->db->get('postagens')->result();
		echo '<pre>';
		print_r($dados);
	}
}
