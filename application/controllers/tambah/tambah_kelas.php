<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_kelas extends CI_Controller {
    public function __construct()
    {
    	parent::__construct();
    	$this->load->model('admin_model');
    }
	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
		$data['main_view'] = 'kelas/tambah_kelas';
		$this->load->view('template_view', $data);
		}else{
			redirect('Admin');
		}
	}

		public function insert_kelas()
	{
		if($this->input->post('submit'))
		{
		 	$this->form_validation->set_rules('KD_KELAS', 'Kode Kelas', 'trim|required');	
		 	$this->form_validation->set_rules('NM_KELAS', 'Nama Kelas', 'trim|required');

		 	if($this->form_validation->run()==TRUE)
			{
				if($this->admin_model->insert_kelas() == TRUE)
				{
					$data['main_view'] = 'kelas/tambah_kelas';
					$data['notif'] = 'berhasil';
					$this->load->view('template_view', $data);
				}
				else
				{
					$data['main_view'] = 'kelas/tambah_kelas';
					$data['notif'] = 'ID kelas sudah ada, silahkan isi kembali';
					$this->load->view('template_view', $data);
				}
			} else
			{
				$data['main_view'] = 'kelas/tambah_kelas';
					$data['notif'] = validation_errors();
					$this->load->view('template_view', $data);
			}

		}
	}

}

/* End of file tambah_kelas.php */
/* Location: ./application/controllers/tambah/tambah_kelas.php */