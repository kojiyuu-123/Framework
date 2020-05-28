<?php
class Users_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_users()
	{
    	$query = $this->db->get('users');
    	return $query->result_array();
	}
	
	public function update_user($user_id)
	{
	    $data = array(
	        'first_name' => $this->input->post('first_name'),
	        'last_name' => $this->input->post('last_name'),
	        'email' => $this->input->post('email')
	    );

	    $this->db->where('id', $user_id);
	    return $this->db->update('users', $data);
	}

	public function create_user()
	{
	    $this->load->helper('url');

	    $data = array(
	        'first_name' => $this->input->post('first_name'),
	        'last_name' => $this->input->post('last_name'),
	        'email' => $this->input->post('email')
	    );

	    return $this->db->insert('users', $data);
	}

	public function get_user($user_id)
	{
	    $query = $this->db->where('id', $user_id)->get('users');
	    return $query->row();
	}

}

?>