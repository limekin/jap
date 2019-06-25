<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryModel extends CI_Model {

    public function all() {

        $query = "SELECT * FROM categories";
        return $this->db->query($query)->result();

    }

    public function for_website() {

        $categories = $this->all();
        $ret = array();

        foreach($categories as $category) {
            $subret = array();
            $subcategories = $this->db->query("SELECT * FROM sub_categories WHERE product_id = " . $category->id)->result();

            foreach($subcategories as $subcategory) {
                $subret[] = $subcategory->category_name;
            }

            $ret[]= array(
                'name' => $category->product_name,
                'sub' => $subret
            );
        }

        return $ret;
    }

    public function sub_all() {
        $query = "SELECT * FROM sub_categories";
        return $this->db->query($query)->result();
    }

}
