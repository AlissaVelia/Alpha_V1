<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	 public function index()
	{
		
		if($this->session->userdata('logged_in') == TRUE){
		$data['main_view'] = 'dashboard';
		$data['list'] = $this->admin_model->jumlah_siswa();
		$this->load->view('template_view', $data);

		}
		else{
			redirect('Admin');
		}
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */

