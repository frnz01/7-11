<?php
class Inventory extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Inventory_model');
        $this->load->library('session');
    }
    public function index()
    {
        $this->load->view('Inventory/add_products');
    }
   
}
?>