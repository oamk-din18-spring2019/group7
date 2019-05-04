<?php
class Messager extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('messager_model');
        $this->load->helper('url_helper');
    }
     
    public function message()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Send a message ';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('messager/message'); 
        } else {
            $this->messager_model->set_messager();
            $this->load->view('messager/success');
        }
    }
}    