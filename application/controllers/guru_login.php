<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_login extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_m');
		$this->load->model('admin_model');
		//Do your magic here
	}

	public function index()
	{	
		
			$this->load->view('login_guru');
	}

	public function login_guru()
	{

		$this->load->view('login_guru');
		if($this->input->post('submit')) {

			$this->form_validation->set_rules('NIK', 'NIK', 'trim|required');
			$this->form_validation->set_rules('NM_GURU', 'NM_GURU', 'trim|required');

			if ($this->form_validation->run() == TRUE) {

				if ($this->Admin_m->login_guru() == TRUE) {
					redirect('guru/dashboard');
				} else {
					$data['notif'] = 'Login gagal';
					$this->load->view('login_guru', $data);
				}
			} else {
				$data['notif'] = validation_errors();
				$this->load->view('login_guru', $data);
			}
		} 
	}

	public function proses()
	{
		
		if ($this->admin_model->tambahsikap() == TRUE) {
			$this->session->set_flashdata('addsikap', 'tambah sikap berhasil');
			$data['main_view'] = 'laporan/lihat_sikap';
			$data['list'] = $this->admin_model->laporan_sikap();
			$this->load->view('template_guru', $data);
		}else{
			$this->session->set_flashdata('addsikap', 'tambah sikap gagal');
			redirect('guru/dashboard');
		}
	}
	public function lihatsikap()
	{
			$data['main_view'] = 'laporan/lihat_sikap';
			$data['list'] = $this->admin_model->laporan_sikap();
			$this->load->view('template_guru', $data);
	}

	public function logout()
	{
		$data = array(
				'NIK'	=> '',
				'KD_MAPEL' => '',
            	'KD_GURU' => '',
            	'NM_GURU' => '',
				'logged_in' => FALSE
			);

		$this->session->sess_destroy();
		redirect('guru_login');

	}
}

/* End of file guru.php */
/* Location: ./application/controllers/guru/guru.php */