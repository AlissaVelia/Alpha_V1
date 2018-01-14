<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard  extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
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
}

/* End of file dashboard_siswa.php */
/* Location: ./application/controllers/dashboard_siswa.php */