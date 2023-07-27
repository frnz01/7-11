<?php

class Inventory_model extends CI_Model {
    public function getProducts() {
        $this->db->select('*');
        $this->db->from('tbl_products');
        $query = $this->db->get();
        return $query->result();
    }
    public function addProduct($name, $stocks, $category, $price){
        $data = array(
            'name' => $name,
            'stocks' => $stocks,
            'category' => $category,
            'price' => $price,
        );
        $this->db->insert('tbl_products', $data);
    }
    public function editProduct($id, $name, $stocks, $category, $price){
        $data = array(
            'name' => $name,
            'stocks' => $stocks,
            'category' => $category,
            'price' => $price,
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_products', $data);
    }
    public function deleteProduct($id){
        $this->db->where('id', $id);
        $this->db->delete('tbl_products');
    }
    public function purchaseAdd($id, $quantity, $price){
        $date = date('Y-m-d H:i:s');
        $total = $quantity * $price;
        $status = 'Unpaid';

        $data = array(
            'id' => $id,
            'quantity' => $quantity,
            'total' => $total,
            'date' => $date,
            'status' => $status,
        );

        $this->db->insert('purchase', $data);

    }
    public function getRecords() {
        $this->db->select('purchase.*, tbl_products.*');
        $this->db->from('purchase');
        $this->db->join('tbl_products', 'purchase.id = tbl_products.id', 'inner');
        $query = $this->db->get();
        return $query->result();
    }
}
?>