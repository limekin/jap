<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryModel extends CI_Model {

    public function all() {

        $query = "SELECT * FROM categories";
        return $this->db->query($query)->result();

    }

    public function sub_all() {
        $query = "SELECT * FROM sub_categories";
        return $this->db->query($query)->result();

    }

}
