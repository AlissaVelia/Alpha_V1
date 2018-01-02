<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_m');
		$this->load->model('admin_model');
	}
	
	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
		$data['main_view'] = 'siswa/profil';	
		$NIS = $this->session->userdata('NIS'); 
		$this->load->view('template_siswa', $data);
		}else{
			redirect('siswa_login');
		}
	}
}

/* End of file profil.php */
/* Location: ./application/controllers/siswa/profil.php */

