<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function insert_kelas()
	{
		$data = array(
			'KD_KELAS' => $this->input->post('KD_KELAS'),
			'NM_KELAS' => $this->input->post('NM_KELAS'),
			'JML_SISWA' => '0');
		$this->db->insert('tb_kelas', $data);
		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		else {
			return FALSE;
		}
	}

	public function read_kelas()
	{
		return $this->db->get('tb_kelas')->result();
	}
    
    public function delete_kelas($KD_KELAS)
	{
			$this->db->where('KD_KELAS', $KD_KELAS)
			 ->delete('tb_kelas');

		if($this->db->affected_rows()> 0)
	 	{
			return TRUE;
	 	}
		else
		{
	 		return FALSE;
		}
	}

     public function get_kelas_by_id($KD_KELAS) 
	 {
	  return $this->db->where('KD_KELAS', $KD_KELAS)->get('tb_kelas')->row();
	 }
    
     public function update_kelas($KD_KELAS)
		{
			
			$data = array(
				//'KD_KELAS' => $this->input->post('KD_KELAS'),
			'NM_KELAS' => $this->input->post('NM_KELAS'),
			'JML_SISWA' => $this->input->post('JML_SISWA'));
			$this->db->where('KD_KELAS', $KD_KELAS)
					 ->update('tb_kelas', $data);
					 
			if($this->db->affected_rows() > 0)
			{
				return TRUE;
			}
			else
			 {
				return FALSE;
			}
		}

	



	public function insert_mapel()
	{
		$data = array(
			'KD_MAPEL' => $this->input->post('KD_MAPEL'),
			'NM_MAPEL' => $this->input->post('NM_MAPEL'));
		$this->db->insert('tb_mapel', $data);
		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		else {
			return FALSE;
		}
	}


    public function read_mapel()
	{
		return $this->db->get('tb_mapel')->result();
	}
  

		public function delete_mapel($KD_MAPEL)
	{
			$this->db->where('KD_MAPEL', $KD_MAPEL)
			 ->delete('tb_mapel');

		if($this->db->affected_rows()> 0)
	 	{
			return TRUE;
	 	}
		else
		{
	 		return FALSE;
		}
	}

	 public function get_mapel_by_id($KD_MAPEL) 
	 {
	  return $this->db->where('KD_MAPEL', $KD_MAPEL)->get('tb_mapel')->row();
	}
//untuk melakukan Create, pertama kali kita buat method ini untuk inisialisasi database

	 public function update_mapel($KD_MAPEL)
		{
			
			$data = array(
				//'KD_KELAS' => $this->input->post('KD_KELAS'),
			'NM_MAPEL' => $this->input->post('NM_MAPEL'));
			$this->db->where('KD_MAPEL', $KD_MAPEL)
					 ->update('tb_mapel', $data);
					 
			if($this->db->affected_rows() > 0)
			{
				return TRUE;
			}
			else
			 {
				return FALSE;
			}
		}

	
	public function insert_guru()
	{
		$data = array(
			'KD_GURU' => $this->input->post('KD_GURU'),
			'KD_MAPEL' => $this->input->post('KD_MAPEL'),
			'NM_GURU' => $this->input->post('NM_GURU'),
			'NIK' => $this->input->post('NIK'));
		$this->db->insert('tb_guru', $data);
		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	public function read_guru()
	{
		return $this->db->get('tb_guru')->result();
	}
    
    public function delete_guru($KD_GURU)
	{
			$this->db->where('KD_GURU', $KD_GURU)
			 ->delete('tb_guru');

		if($this->db->affected_rows()> 0)
	 	{
			return TRUE;
	 	}
		else
		{
	 		return FALSE;
		}
	}

     public function get_guru_by_id($KD_GURU) 
	 {
	  return $this->db->where('KD_GURU', $KD_GURU)->get('tb_guru')->row();
	 }
    
     public function update_guru($KD_GURU)
		{
			
			$data = array(
			//'KD_GURU' => $this->input->post('KD_GURU'),
			'KD_MAPEL' => $this->input->post('KD_MAPEL'),
			'NM_GURU' => $this->input->post('NM_GURU'),
			'NIK' => $this->input->post('NIK'));
			$this->db->where('KD_GURU', $KD_GURU)
					 ->update('tb_guru', $data);
					 
			if($this->db->affected_rows() > 0)
			{
				return TRUE;
			}
			else
			 {
				return FALSE;
			}
		}

	public function insert_walisiswa()
	{
		$data = array(
			'KD_WALSIS' => $this->input->post('KD_WALSIS'),
			'NM_WALSIS' => $this->input->post('NM_WALSIS'),
			'NIK' => $this->input->post('NIK'));
		$this->db->insert('tb_walisiswa', $data);
		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	public function read_walisiswa()
	{
		return $this->db->get('tb_walisiswa')->result();
	}
    
    public function delete_walisiswa($KD_WALSIS)
	{
			$this->db->where('KD_WALSIS', $KD_WALSIS)
			 ->delete('tb_walisiswa');

		if($this->db->affected_rows()> 0)
	 	{
			return TRUE;
	 	}
		else
		{
	 		return FALSE;
		}
	}

     public function get_walisiswa_by_id($KD_WALSIS) 
	 {
	  return $this->db->where('KD_WALSIS', $KD_WALSIS)->get('tb_walisiswa')->row();
	 }
    
     public function update_walisiswa($KD_WALSIS)
		{
			
			$data = array(
			//'KD_WALSIS' => $this->input->post('KD_WALSIS'),
			'NM_WALSIS' => $this->input->post('NM_WALSIS'),
			'NIK' => $this->input->post('NIK'));
			$this->db->where('KD_WALSIS', $KD_WALSIS)
					 ->update('tb_walisiswa', $data);
					 
			if($this->db->affected_rows() > 0)
			{
				return TRUE;
			}
			else
			 {
				return FALSE;
			}
		}


		public function insert_siswa()
	{
		$KD_KELAS = $this->input->post('KD_KELAS');
 		$jml_kls = $this->db->where('KD_KELAS', $KD_KELAS)->get('tb_kelas')->row()->JML_SISWA;
		$data = array(
			'NIS' => $this->input->post('NIS'),
			'KD_WALSIS' => $this->input->post('KD_WALSIS'),
			'KD_KELAS' => $this->input->post('KD_KELAS'),
			'NM_SISWA' => $this->input->post('NM_SISWA'),
		    'TTL' => $this->input->post('TTL'),
			'ALAMAT' => $this->input->post('ALAMAT'),
			'ASAL_SMP' =>$this->input->post('ASAL_SMP'),
			'NO_TELP' => $this->input->post('NO_TELP'),
			'NM_AYAH' => $this->input->post('NM_AYAH'),
			'NM_IBU' => $this->input->post('NM_IBU'),
			'NO_AYAH' => $this->input->post('NO_AYAH'),
			'NO_IBU' => $this->input->post('NO_IBU'),
		    'JENKEL' => $this->input->post('JENKEL'));
	
		$this->db->insert('tb_siswa', $data);
		$add = (int)$jml_kls + 1 ;
			$this->db->set('JML_SISWA', $add)->WHERE('KD_KELAS', $KD_KELAS)->update('tb_kelas');



		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	public function read_siswa()
	{
		return $this->db->get('tb_siswa')->result();
	}
    
    public function delete_siswa($NIS)
	{
		$KD_KELAS = $this->db->where('NIS', $NIS)->get('tb_siswa')->row()->KD_KELAS;
 		$jml_kls = $this->db->where('KD_KELAS', $KD_KELAS)->get('tb_kelas')->row()->JML_SISWA;
		$this->db->where('NIS', $NIS)
			 ->delete('tb_siswa');

		if($this->db->affected_rows()> 0)
	 	{
			
		$min = (int)$jml_kls - 1 ;
			$this->db->set('JML_SISWA', $min)->WHERE('KD_KELAS', $KD_KELAS)->update('tb_kelas');
	 	}
		else
		{
	 		return FALSE;
		}
	}

     public function get_siswa_by_id($NIS) 
	 {
	  return $this->db->where('NIS', $NIS)->get('tb_siswa')->row();
	 }
    
     public function update_siswa($NIS)
		{
			
			$data = array(
			//''NIS' => $this->input->post('NIS'),
			'KD_WALSIS' => $this->input->post('KD_WALSIS'),
			'KD_KELAS' => $this->input->post('KD_KELAS'),
			'NM_SISWA' => $this->input->post('NM_SISWA'),
		    'TTL' => $this->input->post('TTL'),
			'ALAMAT' => $this->input->post('ALAMAT'),
			'ASAL_SMP' =>$this->input->post('ASAL_SMP'),
			'NO_TELP' => $this->input->post('NO_TELP'),
			'NM_AYAH' => $this->input->post('NM_AYAH'),
			'NM_IBU' => $this->input->post('NM_IBU'),
			'NO_AYAH' => $this->input->post('NO_AYAH'),
			'NO_IBU' => $this->input->post('NO_IBU'),
		    'JENKEL' => $this->input->post('JENKEL'));
			$this->db->where('NIS', $NIS)
					 ->update('tb_siswa', $data);
					 
			if($this->db->affected_rows() > 0)
			{
				return TRUE;
			}
			else
			 {
				return FALSE;
			}
		}

		public function siswa_by_id($NIS)
		{
			return $this->db->where('NIS', $NIS)->get('tb_siswa')->row();
		}

		public function laporan_sikap()
		{
		$kueri = 'SELECT * FROM v_sikap_siswa';
		$query = $this->db->query($kueri);
		$row = $query->result();
		if (isset($row))
        {
			return $row;
			//return TRUE;
		}
		else
		 {
			return FALSE;
		}
		}

		public function laporan_kehadiran()
		{
		$kueri = 'SELECT * FROM v_kehadiran_siswa';

		$query = $this->db->query($kueri);
		$row = $query->result();
		if (isset($row))
        {
			return $row;
			//return TRUE;
		}
		else
		 {
			return FALSE;
		}
		}

		public function count_kehadiran_siswa($NIS)
		{

		$kueri = " SELECT * FROM v_kehadiran_siswa WHERE NIS like '%".$NIS."%'" ;
		$query = $this->db->query($kueri);
		$row = $query->result();
		if (isset($row))
        {
			return $row;
			//return TRUE;
		}
		else
		 {
			return FALSE;
		}
		}

		public function jumlah_siswa()
		{
		$kueri = "SELECT COUNT(*) FROM tb_siswa";
	
		$query = $this->db->query($kueri);
		$row = $query->result();
		if (isset($row))
        {
			return $row;
			//return TRUE;
		}
		else
		 {
			return FALSE;


		}
    	
	}

}

	



/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */