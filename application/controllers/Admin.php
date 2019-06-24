<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->view('admin/index');
	}

	public function login() {
		$this->load->view('admin/login');
	}

	public function orders() {
		
		$this->load->model('OrderModel', 'order');

		$orders = $this->order->all();
		
		$data  = array(
			'orders' => $orders
		);
		$this->view('admin/orders', $data);
	}

	public function menu() {
		
		$this->load->model('MenuModel', 'menu');

		$menu = $this->menu->all();
		
		$data  = array(
			'menu' => $menu
		);
		$this->view('admin/menu', $data);
	}

	public function categories() {
		
		$this->load->model('CategoryModel', 'category');

		$categories = $this->category->all();
		
		$data  = array(
			'categories' => $categories
		);
		$this->view('admin/categories', $data);
	}

	public function subcategories() {
		
		$this->load->model('CategoryModel', 'category');

		$subcategories = $this->category->sub_all();
		
		$data  = array(
			'subcategories' => $subcategories
		);
		$this->view('admin/subcategories', $data);
	}

	private function view($page, $data = array()) {
		$this->load->view("admin/header");
		$this->load->view($page, $data);
		$this->load->view('admin/footer');

	}

}
