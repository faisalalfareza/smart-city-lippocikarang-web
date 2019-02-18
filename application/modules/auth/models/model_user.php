<?php
 
    class Model_user extends CI_Model {

	public function cek_user($data) {
	$query = $this->db->get_where('login_session', $data);
	return $query;
	}
        
        function get_records()
        {
            $query = $this->db->get('login_session');
            return $query->result();
        }

        function add_record($data) 
        {
            $this->db->insert('login_session', $data);
            return;
        } 
        
        function add_table($data,$tb) 
        {
            $this->db->field($tb,$data);
            return;
        }         

    }

?>
    


 