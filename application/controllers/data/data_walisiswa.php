<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_walisiswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}
	


	public function index()
	{
		
		if($this->session->userdata('logged_in') == TRUE){

		$data['main_view'] = 'walisiswa/data_walisiswa';
		$data['list'] = $this->admin_model->read_walisiswa();
		$this->load->view('template_view', $data);

		}else{
			redirect('Admin');
		}
		
	}

	public function hapus()
	{
		$KD_WALSIS = $this->input->get('rcgn');
		if($this->admin_model->delete_walisiswa($KD_WALSIS) == TRUE)
		{
			$this->session->set_flashdata('notif', 'Hapus data berhasil');
			redirect('data/data_walisiswa');
		}else {
					$this->session->set_flashdata('notif', 
					'Peringatan! Data master tidak bisa dihapus karena ada rincian data
					yang berhubungan dengan data tersebut.');
			redirect('data/data_walisiswa');
		}
	}

	public function lihat()
		{
			 
				$data['main_view'] = 'walisiswa/lihat_walisiswa';		
				$KD_WALSIS = $this->uri->segment(4);
				$data['list'] = $this->admin_model->get_walisiswa_by_id($KD_WALSIS);
				$this->load->view('template_view', $data);
			
		}

		public function edit()
		{
			
			$KD_WALSIS = $this->uri->segment(4);
			$data['list'] = $this->admin_model->get_walisiswa_by_id($KD_WALSIS);
			if($this->input->post('submit'))
			{
			//$this->form_validation->set_rules('KD_WALSIS', 'Kode Walisiswa', 'trim|required');	
		 	$this->form_validation->set_rules('NM_WALSIS', 'Nama Walisiswa', 'trim|required');
		 	$this->form_validation->set_rules('NIK', 'NIK', 'trim|required');
			 			 	
				
				if($this->form_validation->run()==TRUE)
				{
					if($this->admin_model->update_walisiswa($KD_WALSIS) == TRUE)
					{
						$data['main_view'] = 'walisiswa/lihat_walisiswa';
						$data['notif'] = 'berhasil';
						$this->load->view('template_view', $data);
						redirect('data/data_walisiswa');
					}
					else
					{
						$data['main_view'] = 'walisiswa/lihat_walisiswa';
						$data['notif'] = 'gagal';
						$this->load->view('template_view', $data);
					}
				} else
				{
					$data['main_view'] = 'walisiswa/lihat_walisiswa';
						$data['notif'] = validation_errors();
						$this->load->view('template_view', $data);
				}
			}
				
}

}

/* End of file data_walisiswa.php */
/* Location: ./application/controllers/data/data_walisiswa.php */