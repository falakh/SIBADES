<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Model {

    public function addNews($judul,$isi,$gambar){
        $this->load->database();
        $data = array(
            'judul' => $judul,
            'isi' => $isi
        );

    }
    
    
    
    private function saveImage($image){
        $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                    
                }
    } 
}

/* End of file ModelName.php */
