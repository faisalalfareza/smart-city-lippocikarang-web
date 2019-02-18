<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Home";		
		$this->load->view('user/index', $data);
	}

	public function logout()
	{
		$this->session->unset_userdata('sc_sess');
		$this->session->sess_destroy();
		redirect(base_url('user/'));
	}

	public function detail()
	{
		$data['title'] = "Detail";
		$data['content'] = "detail";
		$this->load->view('user/main', $data);
	}

	public function getapp()
	{
		$data['title'] = "Get App";
		$data['content'] = "getapp";
		$this->load->view('user/main', $data);
	}

	public function profile()
	{
		$data['title'] = "Profile";
		$data['content'] = "profile";
		$this->load->view('user/main', $data);
	}
    
    public function webcam()
	{
		$data['title'] = "Webcam";
		$data['content'] = "webcam";
		$this->load->view('user/main', $data);
	}

	//=========== Module Content ==========================
	public function dining()
	{
		$data['title'] = "Dining";
		$data['content'] = "dining";
		$this->load->view('user/main', $data);
	}

	public function entertainment()
	{
		$data['title'] = "Entertainment";
		$data['content'] = "entertainment";
		$this->load->view('user/main', $data);
	}

	public function shopping()
	{
		$data['title'] = "Shopping";
		$data['content'] = "shopping";
		$this->load->view('user/main', $data);
	}

	public function accomodation()
	{
		$data['title'] = "Accomodation";
		$data['content'] = "accomodation";
		$this->load->view('user/main', $data);
	}
	
	public function publicservice()
	{
		$data['title'] = "Public Service";
		$data['content'] = "publicservice";
		$this->load->view('user/main', $data);
	}

	public function transportation()
	{
		$data['title'] = "Transportation";
		$data['content'] = "transportation";
		$this->load->view('user/main', $data);
	}

	public function industry()
	{
		$data['title'] = "Industry";
		$data['content'] = "industry";
		$this->load->view('user/main', $data);
	}
}