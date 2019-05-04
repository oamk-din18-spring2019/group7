<?php
class Pages extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('products_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function view($page = 'home')
    {
        // Loading url helper
        $this->load->helper('url');

        if (!file_exists(APPPATH.'views/pages/' . $page . '.php')) {
            show_404();
        }

        $pageTitle = $this->getTitle($page);

        $data['page_name'] = $page;
        $data['title'] = ucfirst($pageTitle);
        $data['img_url'] = base_url() . 'img/';

        if ($page === 'popular' || $page === 'home') {
            $data['products'] = array_slice($this->products_model->get_products(), 0, 10);  
                    
        } else if ($page === 'gifts') {
            $data['products'] = array_slice($this->products_model->get_products(), 23, 28);
        } else if ($page === 'recommended') {
            $data['products'] = array_slice($this->products_model->get_products(), 11, 22);
        }

        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer', $data);
    }
    
    private function getTitle($page = 'unknown')
    {
        return $page === 'home' ? 'welcome' : $page;
    }
}