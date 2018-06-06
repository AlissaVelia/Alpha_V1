<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('siswa_model');
	}

	 public function index()
	{
		
		if($this->session->userdata('logged_in') == TRUE){

		$data['kls'] = $this->admin_model->jumlah_kelas();	
		$data['siswa'] =  $this->admin_model->jumlah_siswa();
		$data['guru'] = $this->admin_model->jumlah_guru();
		$data['walsis'] = $this->admin_model->jumlah_walsis();
		$data['sakit'] = $this->admin_model->count_sakit();
		$data['ijin'] = $this->admin_model->count_ijin();
		$data['alpa'] = $this->admin_model->count_alpha();
		$data['masuk'] = $this->admin_model->count_masuk();		
		$data['pr'] = $this->admin_model->gender_p();		
		
		$data['main_view'] = 'dashboard';
		$this->load->view('template_view', $data);

		}
		else{
			redirect('Admin');
		}
	}

	public function absen()
	{
		$absen = $this->siswa_model->absen();
			if( $absen == FALSE)
				{
					$this->session->set_flashdata('notifsiswa','Semua Siswa Sudah Absen! ');
					redirect('kurikulum/dashboard');
				}
				else
				{
					$this->session->set_flashdata('notifsiswa', 'Mengabsenkan '.$absen.' Siswa');
					redirect('kurikulum/dashboard');
				}
	}

	public function pulang()
	{
			$absen = $this->siswa_model->pulangg();
			if( $absen == FALSE)
				{
					$this->session->set_flashdata('notifsiswa','Semua Siswa Sudah Absen Pulang! ');
					redirect('kurikulum/dashboard');
				}
				else
				{
					$this->session->set_flashdata('notifsiswa', $absen.' Siswa Telah Diabsenkan Pulang');
					redirect('kurikulum/dashboard');
				}
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */

