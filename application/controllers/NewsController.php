<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class NewsController extends CI_Controller {
    
        public function index()
        {
            
        }
        public function getAllNews(){
            $this->load->model("News");
            echo $this->News->getAllNews();
            
        }
    }
    
    /* End of file NewsController.php */
    

?>