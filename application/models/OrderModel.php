<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderModel extends CI_Model {

    public function all() {

        $query = "SELECT * FROM order_list, customer_details, product_details";
        $query .= " WHERE order_list.customer_id = customer_details.id";
        $query .= " AND order_list.pro_cat_details_id  = product_details.id";
        $query .= " ORDER BY order_list.id DESC";

        return $this->db->query($query)->result();
    }

}
