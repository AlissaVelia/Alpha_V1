<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard  extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		if($this->session->userdata('logged_in') == false){
			redirect('guru_login');
		}
	}

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
		$data['main_view'] = 'dashboard_guru';
		$data['list'] = $this->admin_model->getsiswa();
		$this->load->view('template_guru', $data);

		}else{
			redirect('guru_login');
		}
	}

	public function homets()
	{
		$data['tb_kelas'] = $this->admin_model->getsiswaguru();
		$this->load->view('tambahsikap', $data);
	}
	public function tambahsikap()
	{

		$NIS = $this->input->get('NIS');
		if($this->input->post('submit'))
			{
				
			if ($this->form_validation->run() == TRUE) {
				if( $this->admin_model->tamvahsikap($NIS) == TRUE)
					{
						$data['notif'] = 'berhasil';
						$data['tb_kelas'] = $this->admin_model->getsiswaguru();
						
						redirect('guru/dashboard');
						$data['main_view'] = 'dashboard_guru';
$this->load->view('template_guru', $data);
					}
					else
					{
						$data['notif'] = 'gagal';
						
						redirect('guru/dashboard');
						$data['main_view'] = 'dashboard_guru';
$this->load->view('template_guru', $data);
					}
				}	

			}
	}


}