
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_guru extends CI_Controller {
	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('admin_model');
	}

	public function index()
	{
		
		if($this->session->userdata('logged_in') == TRUE){

		$data['main_view'] = 'guru/data_diri_guru';
		$data['list'] = $this->admin_model->read_guru();
		$this->load->view('template_view', $data);

		}else{
			redirect('Admin');
		}
		
	}

	public function hapus()
	{
		$KD_GURU = $this->input->get('rcgn');
		if($this->admin_model->delete_guru($KD_GURU) == TRUE)
		{
			$this->session->set_flashdata('notif', 'Hapus data berhasil');
			redirect('data/data_guru');
		}else {
					$this->session->set_flashdata('notif', 
					'Peringatan! Data master tidak bisa dihapus karena ada rincian data
					yang berhubungan dengan data tersebut.');
			redirect('data/data_guru');
		}
	}

	public function lihat()
		{
			 
				$data['main_view'] = 'guru/lihat_guru';		
				$KD_GURU = $this->uri->segment(4);
				$data['list'] = $this->admin_model->get_guru_by_id($KD_GURU);
				$data['KD_MAPEL'] = $this->admin_model->read_mapel();
				$this->load->view('template_view', $data);
			
		}

		public function edit()
		{
			
			$KD_GURU = $this->uri->segment(4);
			$data['list'] = $this->admin_model->get_guru_by_id($KD_GURU);
			if($this->input->post('submit'))
			{
			//$this->form_validation->set_rules('KD_GURU', 'Kode Guru', 'trim|required');	
		 	$this->form_validation->set_rules('KD_MAPEL', 'Kode Mapel', 'trim|required');	
		 	$this->form_validation->set_rules('NM_GURU', 'Nama Guru', 'trim|required');
		 	$this->form_validation->set_rules('NIK', 'NIK', 'trim|required');
			 			 	
				
				if($this->form_validation->run()==TRUE)
				{
					if($this->admin_model->update_guru($KD_GURU) == TRUE)
					{
						$data['main_view'] = 'guru/lihat_guru';
						$data['notif'] = 'berhasil';
						$this->load->view('template_view', $data);
						redirect('data/data_guru');
					}
					else
					{
						$data['main_view'] = 'guru/lihat_guru';
						$data['notif'] = 'gagal';
						$this->load->view('template_view', $data);
					}
				} else
				{
					$data['main_view'] = 'guru/lihat_guru';
						$data['notif'] = validation_errors();
						$this->load->view('template_view', $data);
				}
			}
				
}

}

/* End of file data_guru.php */
/* Location: ./application/controllers/data/data_guru.php */