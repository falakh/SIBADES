<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Admin extends CI_model {
        public function getAllPengajuan(){
            $this->load->database();
            $this->db->select('*');
            $this->db->from('pengajuan');
            $hasil["data"] = $this->db->get()->result();
            return $hasil;
        }
        public function setujui($id){
            $this->load->database();
            $this->db->set("status",1);
            $this->db->where('id_pengajuan',$id);
            $this->db->update('pengajuan');
            $this->db->close();
        }
        public function tolak($id,$pesan)
        {
            $this->load->database();
            $this->db->set("status",2);
            $this->db->set("pesan",$pesan);
            $this->db->where('id_pengajuan',$id);
            $this->db->update('pengajuan');
            $this->db->from('pengajuan');
        }
        
    
    }
    
    /* End of file ModelName.php */
    
