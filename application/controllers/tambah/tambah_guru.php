<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_guru extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}
	public function index()
	{
	    if($this->session->userdata('logged_in') == TRUE){
		$data['main_view'] = 'guru/tambah_guru';
		$data['KD_MAPEL'] = $this->admin_model->read_mapel();
		$this->load->view('template_view', $data);
		}else{
			redirect('Admin');
		}
	}

	public function insert_guru()
	{
		if($this->input->post('submit'))
		{
		 	$this->form_validation->set_rules('KD_GURU', 'Kode Guru', 'trim|required');	
		 	$this->form_validation->set_rules('KD_MAPEL', 'Kode Mapel', 'trim|required');	
		 	$this->form_validation->set_rules('NM_GURU', 'Nama Guru', 'trim|required');
		 	$this->form_validation->set_rules('NIK', 'NIK', 'trim|required');

		 	if($this->form_validation->run()==TRUE)
			{
				if($this->admin_model->insert_guru() == TRUE)
				{
					$data['main_view'] = 'guru/tambah_guru';
					$data['notif'] = 'berhasil';
					$this->load->view('template_view', $data);
				}
				else
				{
					$data['main_view'] = 'guru/tambah_guru';
					$data['notif'] = 'Kode guru sudah ada, silahkan isi kembali';
					$this->load->view('template_view', $data);
				}
			} else
			{
				$data['main_view'] = 'guru/tambah_guru';
					$data['notif'] = validation_errors();
					$this->load->view('template_view', $data);
			}

		}
	}

}

/* End of file tambah_guru.php */
/* Location: ./application/controllers/tambah/tambah_guru.php */