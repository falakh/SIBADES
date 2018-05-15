<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MainController extends CI_Controller {

  
    public function pengajuan()
    {
        $this->load->library('session');
        $this->load->model('User');
        if($this->session->userdata('username')){
            if($this->User->isAdmin()){
                $this->load->model('Admin');
                $data['pengajuan'] = $this->Admin->getAllPengajuan();
                $this->load->view('pengajuan', $data);
            }else {
                $data['pengajuan'] = $this->User->getPengajuan();
                $this->load->view('pengajuan', $data);
            }
        }else{
             redirect('/login','refresh');
        }
    }
    public function admin()
    {
        $this->load->library('session');
        if($this->session->userdata('admin')){
            $this->load->view('allPengajuan');
        }else{
             redirect('','refresh');
        }
    }
    public function status()
    {
        $this->load->view("status");
    }
    public function home(){
        $this->load->model("User");
        $data = array("admin" => $this->User->isAdmin());
          $this ->load->view('home',$data); 
    }
    public function index()
    {
        $this->load->library("session");
       $this->load->view("HomePage",$this->session);
    }
      public function login()
    {
        $this->load->view('login');
    }
    public function isLogin(){
        $this->load->library("session");
       $this->session->userdata("username");
      
        if($this->session->userdata("username")){
            echo $_SESSION["username"]."<br>";
            echo $_SESSION["admin"];
            echo "sukses";
        }else{
            echo "false";
        }
    }
}

/* End of file MainController.php */

?>