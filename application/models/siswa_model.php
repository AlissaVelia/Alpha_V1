<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

	public function __construct()
  {
    parent::__construct();
    //Do your magic here
  }


  public function masuk($NIS)
  {
  date_default_timezone_set('Asia/Jakarta');
  $tanggalabsen = Date('Y-m-d');
  $jam = Date('H:i:s'); 
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
  			'LAST_ABSEN'=> $tanggalabsen,
  			'JAM_MASUK' => $jam,
  			'JAM_PULANG' => ''
  		);
  		
		$this->db->insert('tb_kehadiran', $data);

  		if ($this->db->affected_rows()) {
				# code...
				return TRUE;
			}else{
				return FALSE;
			}
   }
}


  public function pulang($NIS)
  {
  date_default_timezone_set('Asia/Jakarta');
  $jam = Date('H:i:s'); 
  $tanggalpulang = Date('Y-m-d');
  $jampulang = $this->db->where('NIS', $NIS)->SELECT_MAX('KD_KEHADIRAN')->get('tb_kehadiran')->row()->JAM_PULANG;
  $defjampulang = Date('00:00:00');

  	if($defjampulang != $jampulang ){
  		return FALSE;
  	}else{

  		$data = array(
  			'JAM_PULANG' => $jam
  		);
  		$tujuan = array(
  			'NIS' => $NIS
  		);

  		$this->db->where($tujuan);
		$this->db->update('tb_kehadiran', $data);
			
			if ($this->db->affected_rows()) {
					# code...
					return TRUE;
				}else{
					return FALSE;
				}
	}
}


}

/* End of file siswa_model.php */
/* Location: ./application/models/siswa_model.php */