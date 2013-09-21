<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Unicesumar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$data ['unicesumar'] = array('Café','Almoço','Fome');
		$this->load->view('view_unicesumar', $data);
		
	}

}

/* End of file unicesumar.php */
/* Location: ./application/controllers/unicesumar.php */