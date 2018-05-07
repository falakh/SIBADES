<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Admin extends User {
        public function getALLPengajuan(){
            $this->load->database();
            $this->db->select('*');
            $this->db->from('pengajuan');
            return $this->db->get();
        }
        public function setujui($id){
            $this->load->database();
            $this->db->update('status');
            $this->db->from('pengajuan');
            $this->db->where("id_pengajuan",$id);
            return $this->db->get();
        }
        
    
    }
    
    /* End of file ModelName.php */
    
