<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_mapel extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}
	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
		$data['main_view'] = 'mapel/tambah_mapel';
		$this->load->view('template_view', $data);
		}else{
			redirect('Admin');
		}
	}
	public function insert_mapel()
	{
		if($this->input->post('submit'))
		{
		 	$this->form_validation->set_rules('KD_MAPEL', 'Kode Mapel', 'trim|required');	
		 	$this->form_validation->set_rules('NM_MAPEL', 'Nama Mapel', 'trim|required');

		 	if($this->form_validation->run()==TRUE)
			{
				if($this->admin_model->insert_mapel() == TRUE)
				{
					$data['main_view'] = 'mapel/tambah_mapel';
					$data['notif'] = 'berhasil';
					$this->load->view('template_view', $data);
				}
				else
				{
					$data['main_view'] = 'mapel/tambah_mapel';
					$data['notif'] = 'Kode mapel sudah ada, silahkan isi kembali';
					$this->load->view('template_view', $data);
				}
			} else
			{
				$data['main_view'] = 'mapel/tambah_mapel';
					$data['notif'] = validation_errors();
					$this->load->view('template_view', $data);
			}

		}
	}

}

/* End of file tambah_mapel.php */
/* Location: ./application/controllers/tambah/tambah_mapel.php */