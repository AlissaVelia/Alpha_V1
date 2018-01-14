<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
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

		$data['main_view'] = 'dashboard_siswa';		
		$NIS = $this->session->userdata('NIS'); 
		$data['list'] = $this->admin_model->count_kehadiran_siswa($NIS);
		$this->load->view('template_siswa', $data);

		}else{
			redirect('siswa_login');
		}

	}

	public function masuk(){
			

		if($this->input->post('submit'))
		{
		
		$NIS = $this->session->userdata('NIS');
			if($this->siswa_model->masuk($NIS) == TRUE)
				{
						
					$data['notif'] = 'Anda Berhasil Absen!';
					redirect('siswa/dashboard');
				}
				else
				{
					$data['notif'] = 'Anda Sudah Absen Hari Ini!';
					redirect('siswa/dashboard');
				}

		
		
		
		}
		}
		
	}



/* End of file dashboard_siswa.php */
/* Location: ./application/controllers/dashboard_siswa.php */