<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class PengajuanController extends CI_Controller {
  
      public function index()
      {
            $nama = $this->input->post('nama');
            $nik = $this->input->post('nik');
            $perihal = $this->input->post('perihal');
            $this->load->model('User');
            $this->User->pengajuan($nama,$nik,$perihal);
      }
      public function pengajuan(){
      }
  
  }
  
  /* End of file PengejuanController.php */
  

 ?>
