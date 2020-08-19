<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {   
		parent::__construct();
	    //$this->load->model('M_artikel');
	}

	public function index() {		
		$data = array(
			'title' => 'Sippeta',
			'metades' => 'Project based strategy of all focus areas to produce quality and reach your business target stay updated with the latest trends and digital news by reading our articles written by specialists in their industry.',
			'isi' 	=> 'index'
		);
		$this->load->view("layout/wrapper", $data, false);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */