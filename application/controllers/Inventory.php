<?php
class Inventory extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Inventory_model');
        $this->load->library('session');
    }  
    public function index()
    {
        $data['products'] = $this->Inventory_model->getProducts();
        $this->load->view('Inventory/show_products',$data);
    }
    public function addProd()
    {
        $this->load->view('Inventory/add_products');
    }
    public function add(){
        $data = array(
            'name' => $this->input->post('name'),
            'stocks' => $this->input->post('stocks'),
            'category' => $this->input->post('category'),
            'price' => $this->input->post('price'),
        );
        $this->load->model('Inventory_model');
        $this->Inventory_model->addProduct(
            $data['name'],
            $data['stocks'],
            $data['category'],
            $data['price']
        );
        redirect('inventory');
    }
    public function showEdit()
    {
        $this->load->view('Inventory/editProd');
    }
    public function edit(){
        $data = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
            'stocks' => $this->input->post('stocks'),
            'category' => $this->input->post('category'),
            'price' => $this->input->post('price'),
        );
        $this->load->model('Inventory_model');
        $this->Inventory_model->editProduct(
            $data['id'],
            $data['name'],
            $data['stocks'],
            $data['category'],
            $data['price']
        );
        redirect('inventory');
    }
    public function delete($id){
        $this->load->model('Inventory_model');
        $this->Inventory_model->deleteProduct(
            $id
        );
        redirect('inventory');
    }
    public function purchase(){
        $this->load->model('Inventory_model');
        $data['products'] = $this->Inventory_model->getProducts();
        $this->load->view('Inventory/purchase', $data);
    }
    public function addPurchase(){
        $this->load->view('Inventory/add_purchase');
    }
    public function addPur(){
        $data = array(
            'id' => $this->input->post('id'),
            'quantity' => $this->input->post('quantity'),
            'price' => $this->input->post('price'),
        );
        $this->load->model('Inventory_model');
        $this->Inventory_model->purchaseAdd(
            $data['id'],
            $data['quantity'],
            $data['price']
        );
        redirect('purchase');
    }
    public function records(){
        $this->load->model('Inventory_model');
        $data['record'] = $this->Inventory_model->getRecords();
        $this->load->view('Inventory/show_records', $data);
    }

   
}
?>