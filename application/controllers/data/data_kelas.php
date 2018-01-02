<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kelas extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}
	public function index()
	{
		
		if($this->session->userdata('logged_in') == TRUE){

		$data['main_view'] = 'kelas/data_kelas';
		$data['list'] = $this->admin_model->read_kelas();
		$this->load->view('template_view', $data);

		}else{
			redirect('Admin');
		}
		
	}

	public function hapus()
	{
		$KD_KELAS = $this->input->get('rcgn');
		if($this->admin_model->delete_kelas($KD_KELAS) == TRUE)
		{
			$this->session->set_flashdata('notif', 'Hapus data berhasil');
			redirect('data/data_kelas');
		}else {
					$this->session->set_flashdata('notif', 
					'Peringatan! Data master tidak bisa dihapus karena ada rincian data
					yang berhubungan dengan data tersebut.');
			redirect('data/data_kelas');
		}
	}

	public function lihat()
		{
			 
				$data['main_view'] = 'kelas/lihat_kelas';		
				$KD_KELAS = $this->uri->segment(4);
				$data['list'] = $this->admin_model->get_kelas_by_id($KD_KELAS);
				$this->load->view('template_view', $data);
			
		}

		public function edit()
		{
			
			$KD_KELAS = $this->uri->segment(4);
			$data['list'] = $this->admin_model->get_kelas_by_id($KD_KELAS);
			if($this->input->post('submit'))
			{
			// $this->form_validation->set_rules('KD_KELAS', 'KD_KELAS', 'trim|required');	
		 	$this->form_validation->set_rules('NM_KELAS', 'NM_KELAS', 'trim|required');
		 	$this->form_validation->set_rules('JML_SISWA', 'JML_SISWA', 'trim|required');
			 			 	
				
				if($this->form_validation->run()==TRUE)
				{
					if($this->admin_model->update_kelas($KD_KELAS) == TRUE)
					{
						$data['main_view'] = 'kelas/lihat_kelas';
						$data['notif'] = 'berhasil';
						$this->load->view('template_view', $data);
						redirect('data/data_kelas');
					}
					else
					{
						$data['main_view'] = 'kelas/lihat_kelas';
						$data['notif'] = 'gagal';
						$this->load->view('template_view', $data);
					}
				} else
				{
					$data['main_view'] = 'kelas/lihat_kelas';
						$data['notif'] = validation_errors();
						$this->load->view('template_view', $data);
				}
			}
				
}
}

/* End of file data_kelas.php */
/* Location: ./application/controllers/data/data_kelas.php */