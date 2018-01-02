<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_sikap extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}
	public function index()
	{
		
		if($this->session->userdata('logged_in') == TRUE){

		$data['main_view'] = 'laporan/lihat_sikap';
		$data['list'] = $this->admin_model->laporan_sikap();
		$this->load->view('template_view', $data);

		}else{
			redirect('Admin');
		}
	}

}

/* End of file laporan_sikap.php */
/* Location: ./application/controllers/laporan/laporan_sikap.php */