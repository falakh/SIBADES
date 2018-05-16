<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Model {

    public function addNews($judul,$isi,$gambar){
        $this->load->database();
        $data = array(
            'judul' => $judul,
            'isi' => $isi,
            '$gambar'=>$gambar
        );
        $this->db->insert("news",$data);

    }
    public function getAllNews()
    {
        $this->load->database();
        $this->db->from('news');
        $this->db->get_compiled_select('*','news');
        return json_encode ($this->db->get()->result()); 
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
