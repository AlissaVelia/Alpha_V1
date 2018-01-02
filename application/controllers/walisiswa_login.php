<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Walisiswa_login extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_m');
		//Do your magic here
	}

	public function index()
	{	
		
			$this->load->view('login_walisiswa');
	}

	public function login()
	{

		$this->load->view('login_walisiswa');
		if($this->input->post('submit')) {

			$this->form_validation->set_rules('NIK', 'NIK', 'trim|required');
			$this->form_validation->set_rules('NM_WALSIS', 'NM_WALSIS', 'trim|required');

			if ($this->form_validation->run() == TRUE) {

				if ($this->Admin_m->login_walisiswa() == TRUE) {
					redirect('walisiswa/dashboard');
				} else {
					$data['notif'] = 'Login gagal';
					$this->load->view('login_walisiswa', $data);
				}
			} else {
				$data['notif'] = validation_errors();
				$this->load->view('login_walisiswa', $data);
			}
		} 
	}
	public function logout()
	{
		$data = array(
				'NIK'	=> '',
				'logged_in' => FALSE
			);

		$this->session->sess_destroy();
		redirect('walisiswa_login');
	}
}

/* End of file walisiswa.php */
/* Location: ./application/controllers/walisiswa/walisiswa.php */