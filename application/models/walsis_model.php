<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Walsis_model extends CI_Model {

	public function __construct()
  {
    parent::__construct();
    //Do your magic here
  }

  public function ijin($NIS){
  	//$tanggal = $this->db->where('KD_KELAS', $KD_KELAS)->get('tb_kehadiran')->row();
  	

  	//if ($tanggal == $tanggalabsen) {
  	//		return FALSE;
	//	}
  	// else {
  		$data = array(
			'KD_KEHADIRAN' => '',
			'NIS' => $NIS,
			'MASUK' => '0',
			'IJIN' => '1',
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
	public function sakit($NIS){
  	//$tanggal = $this->db->where('KD_KELAS', $KD_KELAS)->get('tb_kehadiran')->row();
  	

  	//if ($tanggal == $tanggalabsen) {
  	//		return FALSE;
	//	}
  	// else {
  		$data = array(
			'KD_KEHADIRAN' => '',
			'NIS' => $NIS,
			'MASUK' => '0',
			'IJIN' => '0',
			'SAKIT' => '1',
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
	public function alpa($NIS){
  	//$tanggal = $this->db->where('KD_KELAS', $KD_KELAS)->get('tb_kehadiran')->row();
  	

  	//if ($tanggal == $tanggalabsen) {
  	//		return FALSE;
	//	}
  	// else {
  		$data = array(
			'KD_KEHADIRAN' => '',
			'NIS' => $NIS,
			'MASUK' => '0',
			'IJIN' => '0',
			'SAKIT' => '0',
			'ALPA' => '1');
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

	public function update_ijin($NIS, $LAST_ABSEN)
		{
			
			$data = array(
			//'KD_WALSIS' => $this->input->post('KD_WALSIS'),
			
			'MASUK' => '0',
			'IJIN' => '1',
			'SAKIT' => '0',
			'ALPA' => '0');
			$this->db->where('NIS', $NIS)
					 ->where('LAST_ABSEN', $LAST_ABSEN)
					 ->update('tb_kehadiran', $data);
					 
			if($this->db->affected_rows() > 0)
			{
				return TRUE;
			}
			else
			 {
				return FALSE;
			}
		}
	
	public function update_sakit($NIS, $LAST_ABSEN)
		{
			
			$data = array(
			//'KD_WALSIS' => $this->input->post('KD_WALSIS'),
			
			'MASUK' => '0',
			'IJIN' => '0',
			'SAKIT' => '1',
			'ALPA' => '0');
			$this->db->where('NIS', $NIS)
					 ->where('LAST_ABSEN', $LAST_ABSEN)
					 ->update('tb_kehadiran', $data);
					 
			if($this->db->affected_rows() > 0)
			{
				return TRUE;
			}
			else
			 {
				return FALSE;
			}
		}
	
	public function update_alpa($NIS, $LAST_ABSEN)
		{
			
			$data = array(
			//'KD_WALSIS' => $this->input->post('KD_WALSIS'),
			
			'MASUK' => '0',
			'IJIN' => '0',
			'SAKIT' => '0',
			'ALPA' => '1');
			$this->db->where('NIS', $NIS)
					 ->where('LAST_ABSEN', $LAST_ABSEN)
					 ->update('tb_kehadiran', $data);
					 
			if($this->db->affected_rows() > 0)
			{
				return TRUE;
			}
			else
			 {
				return FALSE;
			}
		}
		

}

/* End of file walsis_model.php */
/* Location: ./application/models/walsis_model.php */