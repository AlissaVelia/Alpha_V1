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

		$data['kls'] = $this->admin_model->jumlah_kelas();	
		$data['siswa'] =  $this->admin_model->jumlah_siswa();
		$data['guru'] = $this->admin_model->jumlah_guru();
		$data['walsis'] = $this->admin_model->jumlah_walsis();
		$data['main_view'] = 'dashboard';
		$this->load->view('template_view', $data);

		}
		else{
			redirect('Admin');
		}
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */

