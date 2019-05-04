<?php
class Customers extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('customers_model');
        $this->load->helper('url_helper');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation','session'));
        
    }

    public function index()
    {
        $data['customers'] = $this->customers_model->get_customers();
        $data['title'] = 'All customers';
 
        $this->load->view('templates/header', $data);
        $this->load->view('customers/create', $data);
        $this->load->view('templates/footer');
    }

    public function view($customer_id = NULL)
    {
        $data['customer'] = $this->customers_model->get_customers($customer_id);
        $data['title'] = $data['customer']['username'];

        $this->load->view('templates/header', $data);
        $this->load->view('customers/view', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a customer';

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('firstname', 'Firstname', 'required');
        $this->form_validation->set_rules('lastname', 'Lastname', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('country', 'Country', 'required');


        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('customers/create');
            $this->load->view('templates/footer');

        } else {
            $this->customers_model->set_customer();
            $this->load->view('customers/success');
        }
    }
    
    private $b_Check;
    public function login() 
    {        
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		#Kiểm tra điều kiện validate
		if($this->form_validation->run() === TRUE) {
			$a_UserInfo['username'] = $this->input->post('username');
			$a_UserInfo['password'] = $this->input->post('password');
			$a_UserChecking = $this->customers_model->a_fCheckUser( $a_UserInfo );
			if($a_UserChecking) {
				$this->session->set_userdata('user', $a_UserChecking);
                redirect(site_url('customers/success_login'));
                
			} else {
                $this->b_Check = false;
			}
		}
		$a_Data['b_Check']= $this->b_Check;
		$this->load->view('customers/login', $a_Data);		
    }

    public function logout()
    {
		$this->session->unset_userdata('user');	// Unset session of user
		redirect(site_url('customers/login'));
	}
	
    public function success_login()
    {
		$a_UserInfo['user'] = $this->session->userdata('user');
		$this->load->view('customers/success_login', $a_UserInfo);
	}
}