<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends MX_Controller {

	public function index() 
	{
		$this->load->view('welcome_message');
	}

	public function cek_login() {
		$data = array(
			'action' => 'login',
			'username' => $this->input->post('username', TRUE), 
			'password' => $this->input->post('password', TRUE)
			);

		$this->native_curl($data);
	}


	function native_curl($data) {		    
	    $curl_handle = curl_init();
	    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.0.20/smartcity/index.php/api/user/action');
	    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($curl_handle, CURLOPT_POST, 1);
	    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $data);
	     
	    // Optional, delete this line if your API is open
	    //curl_setopt($curl_handle, CURLOPT_USERPWD, $username . ':' . $password);
	     
	    $buffer = curl_exec($curl_handle);
	    curl_close($curl_handle);
	     
	    $result = json_decode($buffer);
	 	
	    if(isset($result[0]->status) && $result[0]->status == 'success'){	
	    	$username = $result[0]->username;
	    	$idUser = $result[0]->idUser;

	    	$user = array("user_smart_city");
	    	array_push($user, array("username" => $username,
	    							"idUser" => $idUser));	    	
	    	$this->session->set_userdata('sc_sess', $user);	        
	        redirect(base_url('user/'));
	    }else{
	        echo 'Something wrong';
	        redirect(base_url('user/'));
	    }
	}
}
?>