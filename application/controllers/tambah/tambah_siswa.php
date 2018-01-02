<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_siswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}
	
	public function index()
	{
	    if($this->session->userdata('logged_in') == TRUE){
		$data['main_view'] = 'siswa/tambah_siswa';
		$data['KD_WALSIS'] = $this->admin_model->read_walisiswa();
		$data['KD_KELAS'] = $this->admin_model->read_kelas();
		$this->load->view('template_view', $data);
		}else{
			redirect('Admin');
		}
	}

	public function insert_siswa()
	{
		if($this->input->post('submit'))
		{
		 	$this->form_validation->set_rules('NIS', 'NIS', 'trim|required');	
		 	$this->form_validation->set_rules('KD_WALSIS', 'Kode WALSIS', 'trim|required');	
		 	$this->form_validation->set_rules('KD_KELAS', 'KD_KELAS', 'trim|required');
		 	$this->form_validation->set_rules('NM_SISWA', 'NM_SISWA', 'trim|required');
		 	$this->form_validation->set_rules('TTL', 'TTL', 'trim|required');		
		 	$this->form_validation->set_rules('ALAMAT', 'ALAMAT', 'trim|required');	
		 	$this->form_validation->set_rules('ASAL_SMP', 'ASAL_SMP', 'trim|required');	
		 	$this->form_validation->set_rules('NO_TELP', 'NO_TELP', 'trim|required');
		 	$this->form_validation->set_rules('NM_AYAH', 'NM_AYAH', 'trim|required');
		 	$this->form_validation->set_rules('NM_IBU', 'NM_IBU', 'trim|required');
		 	$this->form_validation->set_rules('NO_AYAH', 'NO_AYAH', 'trim|required');	
		 	$this->form_validation->set_rules('NO_IBU', 'NO_IBU', 'trim|required');	
		 	$this->form_validation->set_rules('JENKEL', 'JENKEL', 'trim|required');

		 	if($this->form_validation->run()==TRUE)
			{
				if($this->admin_model->insert_siswa() == TRUE)
				{
					$data['main_view'] = 'siswa/tambah_siswa';
					$data['notif'] = 'berhasil';
					$this->load->view('template_view', $data);
				}
				else
				{
					$data['main_view'] = 'siswa/tambah_siswa';
					$data['notif'] = 'Kode siswa sudah ada, silahkan isi kembali';
					$this->load->view('template_view', $data);
				}
			} else
			{
				$data['main_view'] = 'siswa/tambah_siswa';
					$data['notif'] = validation_errors();
					$this->load->view('template_view', $data);
			}

		}
	}

}

/* End of file tambah_siswa.php */
/* Location: ./application/controllers/tambah/tambah_siswa.php */