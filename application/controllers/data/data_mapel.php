<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_mapel extends CI_Controller {
    public function __construct()
    {
    	parent::__construct();
    	$this->load->model('admin_model');
    }
	
	public function index()
	{
		
		if($this->session->userdata('logged_in') == TRUE){

		$data['main_view'] = 'mapel/data_mapel';
		$data['list'] = $this->admin_model->read_mapel();
		$this->load->view('template_view', $data);

		}else{
			redirect('Admin');
		}
		
	}

	public function hapus()
	{
		
		
		$KD_MAPEL= $this->input->get('rcgn');
		if($this->form_validation->run()==TRUE)
			{
				if($this->admin_model->delete_mapel($KD_MAPEL) == TRUE)
				{
					$data['main_view'] = 'data/data_mapel';
					$data['notif'] = 'berhasil';
					$this->load->view('template_view', $data);
				}
				else {
					$this->session->set_flashdata('notif', 
					'Peringatan! Data master tidak bisa dihapus karena ada rincian data
					yang berhubungan dengan data tersebut.');
			redirect('data/data_mapel');
		}
			} else
			{
				$data['main_view'] = 'data/data_mapel';
					$data['notif'] = validation_errors();
					$this->load->view('template_view', $data);
			}

	}

	public function lihat()
		{
			 
				$data['main_view'] = 'mapel/lihat_mapel';		
				$KD_MAPEL= $this->uri->segment(4);
				$data['list'] = $this->admin_model->get_mapel_by_id($KD_MAPEL);
				$this->load->view('template_view', $data);
			
		}

		public function edit()
		{
			
			$KD_MAPEL= $this->uri->segment(4);
			$data['list'] = $this->admin_model->get_mapel_by_id($KD_MAPEL);
			if($this->input->post('submit'))
			{
			// $this->form_validation->set_rules('KD_mapel', 'KD_mapel', 'trim|required');	
		 	$this->form_validation->set_rules('NM_MAPEL', 'NM_MAPEL', 'trim|required');
			 			 	
				
				if($this->form_validation->run()==TRUE)
				{
					if($this->admin_model->update_mapel($KD_MAPEL) == TRUE)
					{
						$data['main_view'] = 'mapel/lihat_mapel';
						$data['notif'] = 'berhasil';
						$this->load->view('template_view', $data);
						redirect('data/data_mapel');
					}
					else
					{
						$data['main_view'] = 'mapel/lihat_mapel';
						$data['notif'] = 'gagal';
						$this->load->view('template_view', $data);
					}
				} else
				{
					$data['main_view'] = 'mapel/lihat_mapel';
						$data['notif'] = validation_errors();
						$this->load->view('template_view', $data);
				}
			}
				
}

}

/* End of file data_mapel.php */
/* Location: ./application/controllers/data/data_mapel.php */