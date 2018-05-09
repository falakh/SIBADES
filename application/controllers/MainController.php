<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

    public function pengajuan()
    {
        $this->load->library('session');
        if($this->session->userdata('username')){
            $this->load->view('pengajuan');
        }else{
             redirect('','refresh');
        }
    }
    public function home(){
        $this->load->model("User");
        $data = array("admin" => $this->User->isAdmin());
          $this ->load->view('home',$data); 
    }
    public function index()
    {
        $this->load->model('User');
        $user = $this->User->getUserName();
         if(isset($user)){
            redirect('/user/home','refresh');
            
        }else{
             $this->load->view('login');
            //redirect('','refresh');

        }
    }
}

/* End of file MainController.php */

?>