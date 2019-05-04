<?php 
class Subscriber_model extends CI_Model {
    const DATA_TABLE = 'subscriber'; 

    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_subscriber($subscriber_id = NULL)
    {
        if (!$subscriber_id) {
            $query = $this->db->get(self::DATA_TABLE);
            return $query->result_array();
        }

        $query = $this->db->get_where(self::DATA_TABLE, array(
            'subscriber_id ' => $subscriber_id
        ));
        return $query->row_array();
    }

    public function set_subscriber()
    {
        $this->load->helper('url');

        $data = array(
            'email' => $this->input->post('email')       
        );

        return $this->db->insert(self::DATA_TABLE, $data);
    }
}