<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kehadiran_siswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_m');
		$this->load->model('admin_model');
		$this->load->model('walsis_model');
	
	}

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
	    $KD_WALSIS = $this->session->userdata('KD_WALSIS'); 
		$data['main_view'] = 'walisiswa/kehadiran_siswa';
		$data['KD_WALSIS'] = $this->admin_model->read_kehadiran_walisiswa($KD_WALSIS);			
		//COUNT PER DAY
		$this->load->view('template_walisiswa', $data);

		}else{
			redirect('walisiswa_login');
		}		
	}
	public function lihat()
		{
			 
				$data['main_view'] = 'walisiswa/detil_kehadiran_siswa';		
				$NIS = $this->uri->segment(4);
				$data['NIS'] = $this->admin_model->read_kehadiran_siswa($NIS);
				$data['list'] = $this->admin_model->count_kehadiran_siswa($NIS);
				$this->load->view('template_walisiswa', $data);
			
		}
	public function read_update()
		{
			 
				$data['main_view'] = 'walisiswa/update_kehadiran_siswa';		
				$NIS = $this->input->get('NIS');
				$LAST_ABSEN	 = $this->input->get('LAST_ABSEN');
				$data['list'] = $this->admin_model->get_kehadiran_by_id($NIS,$LAST_ABSEN);
				$data['list1'] = $this->admin_model->get_siswa_by_id($NIS);
				$data['NIS'] = $this->admin_model->read_kehadiran_siswa($NIS);
				$data['LAST_ABSEN'] = $this->admin_model->read_kehadiran_siswa($NIS);
				$this->load->view('template_walisiswa', $data);
			
		}
	public function update_kehadiran_siswa()
	{
			$NIS = $this->input->get('NIS');
			$LAST_ABSEN	 = $this->input->get('LAST_ABSEN');
			$data['list'] = $this->admin_model->get_kehadiran_by_id($NIS, $LAST_ABSEN	);
			$data['list1'] = $this->admin_model->get_siswa_by_id($NIS);
			
			if($this->input->post('submit'))
			{
			//$this->form_validation->set_rules('KD_GURU', 'Kode Guru', 'trim|required');	
		 	//$this->form_validation->set_rules('LAST_ABSEN', 'LAST_ABSEN', 'trim|required');	
				if( $this->input->post('kehadiran') == 'ijin' && 
					$this->walsis_model->tambah_ijin($NIS, $LAST_ABSEN	) == TRUE)
					{
						$data['main_view'] = 'walisiswa/update_kehadiran_siswa';
						$data['notif'] = 'berhasil';
						$this->load->view('template_walisiswa', $data);
						redirect('walisiswa/dashboard');
					}
					else if (  $this->input->post('kehadiran') == 'sakit' && 
						$this->walsis_model->tambah_sakit($NIS, $LAST_ABSEN	) == TRUE)
					{
						$data['main_view'] = 'walisiswa/update_kehadiran_siswa';
						$data['notif'] = 'berhasil';
						$this->load->view('template_walisiswa', $data);
						redirect('walisiswa/dashboard');
					}

					else if (  $this->input->post('kehadiran') == 'alpa' && 
						$this->walsis_model->tambah_alpa($NIS, $LAST_ABSEN	) == TRUE)
					{
						$data['main_view'] = 'walisiswa/update_kehadiran_siswa';
						$data['notif'] = 'berhasil';
						$this->load->view('template_walisiswa', $data);
						redirect('walisiswa/dashboard');
					}
					else
					{
						$data['main_view'] = 'walisiswa/update_kehadiran_siswa';
						$data['notif'] = 'gagal';
						$this->load->view('template_walisiswa', $data);
					}

			}
	}

}

/* End of file kehadiran_siswa.php */
/* Location: ./application/controllers/walisiswa/kehadiran_siswa.php */