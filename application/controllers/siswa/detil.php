<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detil extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_m');
		$this->load->model('admin_model');
		$this->load->model('siswa_model');
	}
	public function index()
	{
		
		if($this->session->userdata('logged_in') == TRUE){

		$data['main_view'] = 'siswa/detil_siswa';		
		$NIS = $this->session->userdata('NIS'); 
		$data['NIS'] = $this->admin_model->read_kehadiran_siswa($NIS);
		$data['list'] = $this->admin_model->count_kehadiran_siswa($NIS);
		$this->load->view('template_siswa', $data);

		}else{
			redirect('siswa_login');
		}
	}

}

/* End of file detil.php */
/* Location: ./application/controllers/siswa/detil.php */