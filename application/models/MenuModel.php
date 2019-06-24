<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuModel extends CI_Model {

    public function all() {

        $query = "SELECT * FROM product_details, categories, sub_categories";
        $query .= " WHERE product_details.pro_cat_id = sub_categories.id";
        $query .= " AND sub_categories.product_id = categories.id";
        return $this->db->query($query)->result();

    }

}
