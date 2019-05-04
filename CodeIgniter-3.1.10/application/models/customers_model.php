<?php  
class Customers_model extends CI_Model {
    const DATA_TABLE = 'customer'; 

    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_customers($customer_id = NULL)
    {
        if (!$customer_id) {
            $query = $this->db->get(self::DATA_TABLE);
            return $query->result_array();
        }

        $query = $this->db->get_where(self::DATA_TABLE, array(
            'customer_id ' => $customer_id
        ));
        return $query->row_array();
    }

    public function set_customers()
    {
        $this->load->helper('url');

        // die($this->input->post('username'));
 
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'firstname'=> $this->input->post('firstname'),
            'lastname'=> $this->input->post('lastname'),
            'email'=> $this->input->post('email'),
            'phone'=> $this->input->post('phone'),
            'address'=> $this->input->post('address'),
            'city'=> $this->input->post('city'),
            'country'=> $this->input->post('country'),
            'postalcode'=> $this->input->post('postalcode')
        );

        return $this->db->insert(self::DATA_TABLE, $data);
    }

    private $_name = 'customer';
    /**
     * Get all users in DB
     * @param null
     * @return array
     */
    function a_fCheckUser( $a_UserInfo ) {
    	$a_User	=	$this->db->select()
			->where('username', $a_UserInfo['username'])
			->where('password', $a_UserInfo['password'])
			->get($this->_name)
            ->row_array();
            
    	if(count($a_User) >0) {
    		return $a_User;
    	} else {
    		return false;
    	}
    }
}