<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aoc extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['cabecalho'] = "Monitor AOC";
		$dados['dados'] = array("dado 1", "dado 2");
		$this->load->view('templates/cabecalho', $data);
		$this->load->view('login', $dados);
		$this->load->view('templates/rodape');
	}

}

/* End of file  */
/* Location: ./application/controllers/ */