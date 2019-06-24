<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public function index()
	{
		$this->view('front/index');
	}

	private function view($page) {
		$this->load->view("front/header");
		$this->load->view($page);
		$this->load->view('front/footer');

	}

}
