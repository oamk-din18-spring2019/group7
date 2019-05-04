<?php
class Subscriber extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('subscriber_model');
        $this->load->helper('url_helper');
    }
    
    public function subscribe()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Subscribe now';

        $this->form_validation->set_rules('email', 'Email', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('subscriber/subscribe'); 

        } else {
            $this->subscriber_model->set_subscriber();
            $this->load->view('subscriber/success');
        }
    }
}    