<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends MX_Controller {

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

	function create()
	{          		
		$data = array(
        	'judul'      => $this->input->post('judul'),
			'kategori'   => $this->input->post('kategori'),
            'isi'        => $this->input->post('isi'),
            'username'   => $this->input->post('username')   
		);
  
		$this->ide_model->add_record($data);
		if ($this->session->userdata('level')=='admin') {$this->load->view('v_admin',$data); redirect('admin/c_admin');}
		elseif ($this->session->userdata('level')=='creator') {$this->load->view('v_creator',$data); redirect('creator/c_creator');}
	}

    public function edit($id) {
        $data = array();
		if($query = $this->ide_model->get_records())
		{
            $data['records'] = $query;
		}
		
        $this->load->model('ide_model');
        // $vendor = $this->vendor_model->edit($id);
        // $this->load->vars('k', $vendor);
        $data['records'] = $this->ide_model->edit($id);
        $data['k']       = $this->load->vars('k', $records);
		if ($this->session->userdata('level')=='admin') {$this->load->view('v_admin',$data); redirect('admin/c_admin');}
		elseif ($this->session->userdata('level')=='creator') {$this->load->view('v_creator',$data); redirect('creator/c_creator');}
    }
    
    public function prosesedit() {
        $this->load->model('ide_model');
        $this->ide_model->prosesedit();
		if ($this->session->userdata('level')=='admin') {$this->load->view('v_admin',$data); redirect('admin/c_admin');}
		elseif ($this->session->userdata('level')=='creator') {$this->load->view('v_creator',$data); redirect('creator/c_creator');}
    }


	public function update()
	{
		$data = array(
                'judul'    => 'name of judul.',
                'kategori'   => 'number of kategori.',
                'isi'  => 'address of isi.'
		);

		$this->ide_model->update_record($data);
		if ($this->session->userdata('level')=='admin') {$this->load->view('v_admin',$data); redirect('admin/c_admin');}
		elseif ($this->session->userdata('level')=='creator') {$this->load->view('v_creator',$data); redirect('creator/c_creator');}
        
	}

}