<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

	public function __construct()
  {
    parent::__construct();
    //Do your magic here
  }

  public function masuk($NIS){
  	//$tanggal = $this->db->where('KD_KELAS', $KD_KELAS)->get('tb_kehadiran')->row();
  	

  	//if ($tanggal == $tanggalabsen) {
  	//		return FALSE;
	//	}
  	// else {
  		$data = array(
			'KD_KEHADIRAN' => '',
			'NIS' => $NIS,
			'MASUK' => '1',
			'IJIN' => '0',
			'SAKIT' => '0',
			'ALPA' => '0');
		$this->db->insert('tb_kehadiran', $data);
		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		else {
			return FALSE;
  	}
  	
  //}
}

}

/* End of file siswa_model.php */
/* Location: ./application/models/siswa_model.php */