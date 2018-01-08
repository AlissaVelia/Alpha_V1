<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_m');
		$this->load->model('admin_model');
	}
	public function index()
	{
		
		if($this->session->userdata('logged_in') == TRUE){
		$KD_WALSIS = $this->session->userdata('KD_WALSIS'); 
		$data['main_view'] = 'dashboard_walisiswa';		
		$data['KD_WALSIS'] = $this->admin_model->read_siswa_walisiswa($KD_WALSIS);	
		$NIK = $this->session->userdata('NIK'); 
		$this->load->view('template_walisiswa', $data);

		}else{
			redirect('walisiswa_login');
		}

		
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/waliwalisiswa/dashboard.php */