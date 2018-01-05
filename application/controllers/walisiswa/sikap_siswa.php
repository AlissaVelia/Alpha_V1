<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sikap_siswa extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){

		$data['main_view'] = 'walisiswa/sikap_siswa';
				
		$this->load->view('template_walisiswa', $data);

		}else{
			redirect('walisiswa_login');
		}		
	}

}

/* End of file sikap_siswa.php */
/* Location: ./application/controllers/walisiswa/sikap_siswa.php */