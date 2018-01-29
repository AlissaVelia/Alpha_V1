<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	
	public function tamvahsikap($NIS)
	{
		$data = array(
			'KD_MAPEL' => $this->session->userdata('KD_MAPEL'),
			'NIS' => $NIS,
			'KD_GURU' => $this->session->userdata('KD_GURU'),
			'SIKAP' => 'A'
			);
			$this->db->insert('tb_sikap', $data);
					 
			if($this->db->affected_rows() > 0)
			{
				return TRUE;
			}
			else
			 {
				return FALSE;
			}
	}
	public function getsiswaguru()
	{
		return $this->db->join('tb_siswa', 'tb_siswa.KD_KELAS = tb_kelas.KD_KELAS', 'left')
				 ->get('tb_kelas')->result();	
	}
		public function joinkelas()
	{	
		return $this->db->join('tb_siswa', 'tb_siswa.KD_KELAS = tb_kelas.KD_KELAS', 'left')
				 ->get('tb_kelas')->row();
		// $kueri1 = "SELECT tb_kelas.NM_KELAS FROM tb_siswa INNER JOIN tb_kelas ON tb_siswa.KD_KELAS = tb_kelas.KD_KELAS";
		// return $kueri1->result();
	}
	public function joinwalsis()
	{
		// $kueri1 = "SELECT tb_walisiswa.NM_WALSIS FROM tb_siswa INNER JOIN tb_walisiswa ON tb_siswa.KD_WALSIS = tb_walisiswa.KD_WALSIS";
		// return $kueri1->result();
	}
	public function getdatasiswa($NIS)
	{
		return $this->db->where('NIS', $NIS)->get('tb_siswa')->row();
		
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



	public function read_kelas()
	{
		return $this->db->get('tb_kelas')->result();
	}
	public function read_mapel()
	{
		return $this->db->get('tb_mapel')->result();
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

     public function get_kelas_by_id($KD_KELAS) 
	 {
	  return $this->db->where('KD_KELAS', $KD_KELAS)->get('tb_kelas')->row();
	 }
    
      public function get_mapel_by_id($KD_MAPEL) 
	 {
	  return $this->db->where('KD_MAPEL', $KD_MAPEL)->get('tb_mapel')->row();
	 }

     public function update_kelas($KD_KELAS)
		{
			
			$data = array(
				//'KD_KELAS' => $this->input->post('KD_KELAS'),
			'NM_KELAS' => $this->input->post('NM_KELAS'));
			// 'JML_SISWA' => $this->input->post('JML_SISWA'));
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

	



	


    

	

	
//untuk melakukan Create, pertama kali kita buat method ini untuk inisialisasi database

	
	
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
		return $this->db->select('*')
						->join('tb_mapel', "tb_mapel.KD_MAPEL=tb_guru.KD_MAPEL")
				        ->get('tb_guru')
						->result();
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
		return $this->db->select('*')						
						->join('tb_kelas', "tb_kelas.KD_KELAS=tb_siswa.KD_KELAS")
						->join('tb_walisiswa', "tb_walisiswa.KD_WALSIS=tb_siswa.KD_WALSIS")
						->order_by('NM_KELAS', 'ASC')
				        ->get('tb_siswa')
						->result();
	}
	public function read_ksiswa()
	{
		return $this->db->get('tb_kehadiran')->result();
	}

	public function update_kehadiran_siswa($NIS)
		{
			
			$data = array(
			//'KD_WALSIS' => $this->input->post('KD_WALSIS'),
			
			'IJIN' => $this->input->post('IJIN'));
			$this->db->where('NIS', $NIS)
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

	public function get_kehadiran_by_id($NIS, $LAST_ABSEN)
	{
		return $this->db->where('NIS', $NIS)->where('LAST_ABSEN', $LAST_ABSEN)->get('tb_kehadiran')->row();
	}

	public function read_siswa_walisiswa($KD_WALSIS)
	{
		

        $kueri1 = "SELECT * FROM tb_kehadiran INNER JOIN tb_siswa on tb_siswa.NIS = tb_kehadiran.NIS WHERE tb_kehadiran.KD_KEHADIRAN IN(SELECT MAX(KD_KEHADIRAN)
 					FROM tb_kehadiran GROUP BY NIS) AND tb_siswa.KD_WALSIS = $KD_WALSIS ORDER BY LAST_ABSEN ASC";
		

		$query = $this->db->query($kueri1);
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
	public function read_kehadiran_siswa($NIS)
	{

		 $kueri1 = "SELECT * FROM tb_kehadiran INNER JOIN tb_siswa on tb_siswa.NIS = tb_kehadiran.NIS WHERE tb_siswa.NIS = $NIS AND MASUK <> 1 ORDER BY IJIN DESC , SAKIT DESC, ALPA DESC ";
		

		$query = $this->db->query($kueri1);
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

    public function read_kehadiran_walisiswa($KD_WALSIS)
	{
		// return $this->db->where('KD_WALSIS', $KD_WALSIS)
		// 				->select('*')
		// 				->join('tb_kehadiran', "tb_kehadiran.NIS=tb_siswa.NIS")
				        
		// 				->order_by('LAST_ABSEN', 'DESC')
		// 				->get('tb_siswa')
		// 				->result();
		$kueri = "SELECT * FROM v_kehadiran_siswa WHERE KD_WALSIS = $KD_WALSIS ORDER BY KELAS";
				 
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
			$KD_KELAS1 = $this->db->where('NIS', $NIS)->get('tb_siswa')->row()->KD_KELAS;
 		$jml_kls1 = $this->db->where('KD_KELAS', $KD_KELAS1)->get('tb_kelas')->row()->JML_SISWA;

			$KD_KELAS = $this->input->post('KD_KELAS');
 		$jml_kls = $this->db->where('KD_KELAS', $KD_KELAS)->get('tb_kelas')->row()->JML_SISWA;
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
					 $tambah = (int)$jml_kls + 1;
			$this->db->set('JML_SISWA', $tambah)
					 ->where('KD_KELAS', $KD_KELAS)
					 ->update('tb_kelas');
			$min = (int)$jml_kls1 - 1 ;
			$this->db->set('JML_SISWA', $min)->WHERE('KD_KELAS', $KD_KELAS1)->update('tb_kelas');
					 
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
		$kueri = 'SELECT * FROM v_sikap_siswa ORDER BY KELAS ASC';
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

		public function read_sikap_siswa($KD_WALSIS)
	{

		// $kueri = $this->db->query("SELECT * FROM v_sikap_siswa WHERE KD_WALSIS = $KD_WALSIS");
		// // 'SELECT * FROM v_sikap_siswa WHERE KD_WALSIS = $KD_WALSIS';
		// return $query;

		$kueri = "SELECT * FROM v_sikap_siswa WHERE KD_WALSIS = $KD_WALSIS ORDER BY KELAS ASC";
				 
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
		$kueri = 'SELECT * FROM v_kehadiran_siswa ORDER BY KELAS ASC';

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

		public function count_ijin_walsis($KD_WALSIS)
		{

			$query = $this->db->query("SELECT SUM(tb_kehadiran.IJIN) AS IJIN FROM tb_kehadiran INNER JOIN tb_siswa on tb_siswa.NIS = tb_kehadiran.NIS WHERE tb_kehadiran.KD_KEHADIRAN IN(SELECT MAX(KD_KEHADIRAN) FROM tb_kehadiran GROUP BY NIS) AND tb_siswa.KD_WALSIS = $KD_WALSIS");
	    			
	    			$hasil = $query->result_array();
	    			return $hasil[0]["IJIN"];


		}

		public function count_sakit_walsis($KD_WALSIS)
		{

			$query = $this->db->query("SELECT SUM(tb_kehadiran.SAKIT) AS SAKIT FROM tb_kehadiran INNER JOIN tb_siswa on tb_siswa.NIS = tb_kehadiran.NIS WHERE tb_kehadiran.KD_KEHADIRAN IN(SELECT MAX(KD_KEHADIRAN) FROM tb_kehadiran GROUP BY NIS) AND tb_siswa.KD_WALSIS = $KD_WALSIS");
	    			
	    			$hasil = $query->result_array();
	    			return $hasil[0]["SAKIT"];


		}

		public function count_alpa_walsis($KD_WALSIS)
		{

			$query = $this->db->query("SELECT SUM(tb_kehadiran.ALPA) AS ALPA FROM tb_kehadiran INNER JOIN tb_siswa on tb_siswa.NIS = tb_kehadiran.NIS WHERE tb_kehadiran.KD_KEHADIRAN IN(SELECT MAX(KD_KEHADIRAN) FROM tb_kehadiran GROUP BY NIS) AND tb_siswa.KD_WALSIS = $KD_WALSIS");
	    			
	    			$hasil = $query->result_array();
	    			return $hasil[0]["ALPA"];


		}

		public function count_masuk_walsis($KD_WALSIS)
		{

			$query = $this->db->query("SELECT SUM(tb_kehadiran.MASUK) AS MASUK FROM tb_kehadiran INNER JOIN tb_siswa on tb_siswa.NIS = tb_kehadiran.NIS WHERE tb_kehadiran.KD_KEHADIRAN IN(SELECT MAX(KD_KEHADIRAN) FROM tb_kehadiran GROUP BY NIS) AND tb_siswa.KD_WALSIS = $KD_WALSIS");
	    			
	    			$hasil = $query->result_array();
	    			return $hasil[0]["MASUK"];


		}

		public function count_masuk()
		{
			$query = $this->db->query("SELECT SUM(tb_kehadiran.MASUK) AS MASUK FROM tb_kehadiran INNER JOIN tb_siswa on tb_siswa.NIS = tb_kehadiran.NIS WHERE tb_kehadiran.KD_KEHADIRAN IN(SELECT MAX(KD_KEHADIRAN) FROM tb_kehadiran GROUP BY NIS)");
	    			
	    			$hasil = $query->result_array();
	    			return $hasil[0]["MASUK"];
		}

		public function count_ijin()
		{
			$query = $this->db->query("SELECT SUM(tb_kehadiran.IJIN) AS IJIN FROM tb_kehadiran INNER JOIN tb_siswa on tb_siswa.NIS = tb_kehadiran.NIS WHERE tb_kehadiran.KD_KEHADIRAN IN(SELECT MAX(KD_KEHADIRAN) FROM tb_kehadiran GROUP BY NIS)");
	    			
	    			$hasil = $query->result_array();
	    			return $hasil[0]["IJIN"];
		}

		public function count_sakit()
		{
			$query = $this->db->query("SELECT SUM(tb_kehadiran.SAKIT) AS SAKIT FROM tb_kehadiran INNER JOIN tb_siswa on tb_siswa.NIS = tb_kehadiran.NIS WHERE tb_kehadiran.KD_KEHADIRAN IN(SELECT MAX(KD_KEHADIRAN) FROM tb_kehadiran GROUP BY NIS)");
	    			
	    			$hasil = $query->result_array();
	    			return $hasil[0]["SAKIT"];
		}

		public function count_alpha()
		{
			$query = $this->db->query("SELECT IJIN, SUM(tb_kehadiran.ALPA) AS ALPA FROM tb_kehadiran INNER JOIN tb_siswa on tb_siswa.NIS = tb_kehadiran.NIS WHERE tb_kehadiran.KD_KEHADIRAN IN(SELECT MAX(KD_KEHADIRAN) FROM tb_kehadiran GROUP BY NIS)");
	    			
	    			$hasil = $query->result_array();
	    			return $hasil[0]["ALPA"];
		}

		public function walsis_grafik($LAST_ABSEN)
		{
		$kueri = "SELECT Count(IJIN) FROM tb_kehadiran WHERE LAST_ABSEN = $LAST_ABSEN 
		         GROUP BY NIS ";


		//echo $kueri;
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
		$query = $this->db->query("SELECT * FROM tb_siswa");
	    				return $query->num_rows();
		}

		public function jumlah_kelas()
		{
			 $query = $this->db->query("SELECT * FROM tb_kelas");
	    				return $query->num_rows();
		}

		public function jumlah_walsis()
		{
			 $query = $this->db->query("SELECT * FROM tb_walisiswa");
	    			return $query->num_rows();
		}

		public function jumlah_guru()
		{
			 $query = $this->db->query("SELECT * FROM tb_guru");
    				return $query->num_rows();
		}
		public function getsiswa()
		{
			return $this->db->join('tb_siswa', 'tb_siswa.KD_KELAS = tb_kelas.KD_KELAS', 'left')
				 ->get('tb_kelas')->result();
		}

		public function tambahsikap()
		{
			$object = array(
				'NIS'   => $this->input->post('nis_siswa'),
				'SIKAP' => $this->input->post('sikap_siswa'), 
				'KD_MAPEL' => $this->session->userdata('KD_MAPEL'),
				'KD_GURU' => $this->session->userdata('KD_GURU')
			);

			$this->db->insert('tb_sikap', $object);

			if ($this->db->affected_rows()) {
				# code...
				return TRUE;
			}else{
				return FALSE;
			}
		}
		

		public function gender_p()
	
		{
	

			$kueri = "SELECT NM_KELAS, SUM(JENKEL='L') as LAKI, SUM(JENKEL = 'P') as PR FROM tb_siswa INNER JOIN tb_kelas on tb_siswa.KD_KELAS = tb_kelas.KD_KELAS
			GROUP BY NM_KELAS ORDER BY NM_KELAS ASC";

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
		
		public function del_riwayat_kehadiran()
		{
			$this->db->empty_table('tb_kehadiran');

		}
		public function del_riwayat_sikap()
		{
			$this->db->empty_table('tb_sikap');

		}
		
        
}

	



/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */