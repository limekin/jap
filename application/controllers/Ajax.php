<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function menu()
	{
        $this->load->model("MenuModel", 'menu');

        $menu = $this->menu->all();

        header('Content-type: application/json');
        echo json_encode($menu);
        
    }
    
    public function categories() {
        $this->load->model("CategoryModel", 'category');
        
        $categories = $this->category->for_website();

        header('Content-type: application/json');
        echo json_encode($categories);
    }

}
