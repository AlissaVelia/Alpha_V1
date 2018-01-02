<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard  extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
		$data['main_view'] = 'dashboard_guru';
		$this->load->view('template_guru', $data);

		}else{
			redirect('guru_login');
		}
	}

}

/* End of file dashboard_siswa.php */
/* Location: ./application/controllers/dashboard_siswa.php */