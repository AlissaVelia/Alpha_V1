<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

	public function __construct()
  {
    parent::__construct();
    //Do your magic here
  }

  public function tes(){
  $tanggal = $this->db->select('LAST_ABSEN')->where('NIS', $NIS)->get('tb_kehadiran')->row();
}

  public function masuk($NIS){
  $tanggalabsen = Date('Y') . "-" .Date('m'). "-".Date('d');
  $tanggal = $this->db->where('NIS', $NIS)->SELECT_MAX('LAST_ABSEN')->get('tb_kehadiran')->row()->LAST_ABSEN;

  	if ($tanggal == $tanggalabsen) {
  			return FALSE;
		}
  	 else {
  		$data = array(
			'KD_KEHADIRAN' => '',
			'NIS' => $NIS,
			'MASUK' => '1',
			'IJIN' => '0',
			'SAKIT' => '0',
			'ALPA' => '0',
  			'LAST_ABSEN'=> $tanggalabsen);
		$this->db->insert('tb_kehadiran', $data);
		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		else {
			return FALSE;
  	}
  	
  }
}

}

/* End of file siswa_model.php */
/* Location: ./application/models/siswa_model.php */