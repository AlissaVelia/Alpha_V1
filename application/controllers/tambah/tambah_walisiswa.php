<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_walisiswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}
	
	public function index()
	{
	    if($this->session->userdata('logged_in') == TRUE){
		$data['main_view'] = 'walisiswa/tambah_walisiswa';
		$this->load->view('template_view', $data);
		}else{
			redirect('Admin');
		}
	}

	public function insert_walisiswa()
	{
		if($this->input->post('submit'))
		{
		 	$this->form_validation->set_rules('KD_WALSIS', 'Kode Walisiswa', 'trim|required');	
		 	$this->form_validation->set_rules('NM_WALSIS', 'Nama Walisiswa', 'trim|required');
		 	$this->form_validation->set_rules('NIK', 'NIK', 'trim|required');

		 	if($this->form_validation->run()==TRUE)
			{
				if($this->admin_model->insert_walisiswa() == TRUE)
				{
					$data['main_view'] = 'walisiswa/tambah_walisiswa';
					$data['notif'] = 'berhasil';
					$this->load->view('template_view', $data);
				}
				else
				{
					$data['main_view'] = 'walisiswa/tambah_walisiswa';
					$data['notif'] = 'Kode walisiswa sudah ada, silahkan isi kembali';
					$this->load->view('template_view', $data);
				}
			} else
			{
				$data['main_view'] = 'walisiswa/tambah_walisiswa';
					$data['notif'] = validation_errors();
					$this->load->view('template_view', $data);
			}

		}
	}

}

/* End of file tambah_walisiswa.php */
/* Location: ./application/controllers/tambah/tambah_walisiswa.php */