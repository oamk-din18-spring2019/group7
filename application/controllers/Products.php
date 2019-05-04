<?php
class Products extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('products_model');
    }
    
    public function showProducts()
    {
        $data['product'] = $this->products_model->get_products();

        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer');
    }

    public function view($product_id = NULL)
    {
        $data['product'] = $this->products_model->get_products($product_id);
        $data['title'] = $data['product']['name'];

        $this->load->view('templates/header', $data);
        $this->load->view('products/view', $data);
        $this->load->view('templates/footer');
    }
}    