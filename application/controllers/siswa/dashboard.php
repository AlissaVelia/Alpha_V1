	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_m');
		$this->load->model('admin_model');
		$this->load->model('siswa_model');
		if($this->session->userdata('logged_in') == false){
			redirect('siswa_login');
		}
	}

	public function index()
	{

		// $data['main_view'] = 'dashboard_siswa';		
		$NIS = $this->session->userdata('NIS'); 
		$data['NIS'] = $this->admin_model->read_kehadiran_siswa($NIS);
		$data['list'] = $this->admin_model->count_kehadiran_siswa($NIS);
		$data['hai'] = $this->admin_model->getdatasiswa($NIS);
		$data['walsis'] = $this->admin_model->joinwalsis();
		$data['kls'] = $this->admin_model->joinkelas();
		$this->load->view('dashboard_siswa', $data);
		// $this->load->view('template_siswa', $data);
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