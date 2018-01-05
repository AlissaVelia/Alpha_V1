<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kehadiran_siswa extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){

		$data['main_view'] = 'walisiswa/kehadiran_siswa';
				
		$this->load->view('template_walisiswa', $data);

		}else{
			redirect('walisiswa_login');
		}		
	}
}

/* End of file kehadiran_siswa.php */
/* Location: ./application/controllers/walisiswa/kehadiran_siswa.php */