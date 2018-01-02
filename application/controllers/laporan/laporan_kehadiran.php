<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_kehadiran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}
	public function index()
	{
		
		if($this->session->userdata('logged_in') == TRUE){

		$data['main_view'] = 'laporan/lihat_kehadiran';
		$data['list'] = $this->admin_model->laporan_kehadiran();
		$this->load->view('template_view', $data);

		}else{
			redirect('Admin');
		}
	}

}
/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */