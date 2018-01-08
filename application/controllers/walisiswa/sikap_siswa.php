<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sikap_siswa extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->model('admin_model');
		}
	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
	    $KD_WALSIS = $this->session->userdata('KD_WALSIS'); 
		$data['main_view'] = 'walisiswa/sikap_siswa';
		$data['KD_WALSIS'] = $this->admin_model->read_sikap_siswa($KD_WALSIS);
		$NIK = $this->session->userdata('NIK'); 
		$this->load->view('template_walisiswa', $data);

		}else{
			redirect('walisiswa_login');
		}		
	}

}

/* End of file sikap_siswa.php */
/* Location: ./application/controllers/walisiswa/sikap_siswa.php */