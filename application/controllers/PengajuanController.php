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
      public function Allpengajuan()
      {
          $this->load->library("session");
          $this->load->model("Admin");
        if($this->session->admin){
        $result =  $this->Admin->getAllPengajuan();
          echo json_encode($result);
        }
      }
      public function accPengajuan($id)
      {
          $this->load->library("session");
        if($this->session->admin){
            $this->load->model("Admin");
            $this->Admin->setujui($id);
       }
      }
         public function tolak($id,$pesan)
      {
          $this->load->library("session");
         $this->session->userdata("admin"); 
        if(isset($_SESSION["username"])){
          if(($_SESSION['admin'])){
            // do when user is admin
            $this->load->model("Admin");
            $this->Admin->tolak($id,$pesan);
          }
        }
        else{
            echo "fail";
        }
      }
  
  }
  
  /* End of file PengejuanController.php */
  

 ?>
