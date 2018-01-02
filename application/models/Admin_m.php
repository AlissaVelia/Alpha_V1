<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Admin_m extends CI_Model

{
  public function __construct()
  {
    parent::__construct();
    //Do your magic here
  }

  public function dologin()
  {
    $USERNAME  = $this->input->post('USERNAME');
    $PASSWORD = $this->input->post('PASSWORD');

    $query = $this->db->where('USERNAME', $USERNAME)
               ->where('PASSWORD', $PASSWORD)
               ->get('tb_kurikulum');

    if($query->num_rows() > 0)
        {
          $data = array (
            'USERNAME' => $USERNAME,
            'logged_in' => TRUE);

         $this->session->set_userdata($data);
          return TRUE;
          }
         else{
          return FALSE;
         }
  }

  public function login_siswa()
  {
    $NIS  = $this->input->post('NIS');
    $NM_SISWA = $this->input->post('NM_SISWA');

    $query = $this->db->where('NIS', $NIS)
               ->where('NM_SISWA', $NM_SISWA)
               ->get('tb_siswa');

    if($query->num_rows() > 0)
        {
         

       $user = array_shift($query->result_array());
         $data = array('NIS' => $user['NIS'], 
                       'NM_SISWA' => $user['NM_SISWA'], 
                       'TTL' => $user['TTL'], 
                       'NO_TELP' =>$user['NO_TELP'], 
                       
                       'logged_in' => TRUE);
         $this->session->set_userdata($data);
          return TRUE;
          }
         else{
          return FALSE;
         }
  }

  public function login_guru()
  {
    $NIK  = $this->input->post('NIK');
    $NM_GURU = $this->input->post('NM_GURU');

    $query = $this->db->where('NIK', $NIK)
               ->where('NM_GURU', $NM_GURU)
               ->get('tb_guru');

    if($query->num_rows() > 0)
        {
          $data = array (
            'NIK' => $NIK,
            'logged_in' => TRUE);

         $this->session->set_userdata($data);
          return TRUE;
          }
         else{
          return FALSE;
         }
  }

   public function login_walisiswa()
  {
    $NIK  = $this->input->post('NIK');
    $NM_WALSIS = $this->input->post('NM_WALSIS');

    $query = $this->db->where('NIK', $NIK)
               ->where('NM_WALSIS', $NM_WALSIS)
               ->get('tb_walisiswa');

    if($query->num_rows() > 0)
        {
          $data = array (
            'NIK' => $NIK,
            'logged_in' => TRUE);

         $this->session->set_userdata($data);
          return TRUE;
          }
         else{
          return FALSE;
         }
  }

}

