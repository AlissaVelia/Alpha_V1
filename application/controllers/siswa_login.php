<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_login extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_m');
		//Do your magic here
	}

	public function index()
	{	
		
			$this->load->view('login_siswa');
	}

	public function login_siswa()
	{

		$this->load->view('login_siswa');
		if($this->input->post('submit')) {

			$this->form_validation->set_rules('NIS', 'NIS', 'trim|required');
			$this->form_validation->set_rules('NM_SISWA', 'NM_SISWA', 'trim|required');

			if ($this->form_validation->run() == TRUE) {

				if ($this->Admin_m->login_siswa() == TRUE) {
					redirect('siswa/dashboard');
				} else {
					$data['notif'] = 'Login gagal';
					$this->load->view('login_siswa', $data);
				}
			} else {
				$data['notif'] = validation_errors();
				$this->load->view('login_siswa', $data);
			}
		} 
	}
	public function logout()
	{
		$data = array(
				'NIS'	=> '',
				'logged_in' => FALSE
			);

		$this->session->sess_destroy();
		redirect('siswa_login');
	}
}

/* End of file siswa.php */
/* Location: ./application/controllers/siswa/siswa.php */