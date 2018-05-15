<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class LoginController extends CI_Controller {
    
        public function index()
        {
        $id = $this->input->post('userName');
        $pass = $this->input->post('password');
        if(!$id && !$pass){
            $this ->load->view('login');            
        }else{
            $this->load->model('User');
            if($this->User->login($id,$pass)){
                $this->admin();
               redirect('','refresh');
            }else{
                redirect('/login','refresh');      
            }
            
        }
        }
     private function admin(){
        $this->load->model('User');
        $detector =  $this->User->isAdmin();
        if($detector){
            echo 'sukses';
            return 'admin';
        }else{
             return '';
        }
    }
    
    }
    
    /* End of file LoginController.php */
    
?>