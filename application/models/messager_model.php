<?php
class Messager_model extends CI_Model {
    const DATA_TABLE = 'messager'; 

    public function __construct()
    {
        $this->load->database();
    }
     
    public function get_messager($messager_id = NULL)
    {
        if (!$messager_id) {
            $query = $this->db->get(self::DATA_TABLE);
            return $query->result_array();
        }

        $query = $this->db->get_where(self::DATA_TABLE, array(
            'messager_id ' => $messager_id
        ));
        return $query->row_array();
    }

    public function set_messager()
    {
        $this->load->helper('url');

        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'message'=> $this->input->post('message')
       
        );

        return $this->db->insert(self::DATA_TABLE, $data);
    }
}