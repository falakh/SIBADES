<?php
class User extends CI_Model{
  
    public function getUserName(){
         $this->load->library('session');
         return $this->session->userdata('username');
    }
    public function login($id , $password):bool {
        $this->load->database();
      //  $seleksi = "'userName' = $id AND 'password' = $password";
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('userName',$id);
        $this->db->where('password',$password);
        //   $result = $this->db->where('user',$seleksi);
        if($this->db->get()->num_rows()>0){
            $this->load->library('session');
            $this->session->set_userdata('username',$id);
            $this->db->close();
            return true;
        }else{
            $this->db->close();
            return false;
        }
    }
    public function isAdmin(){
            $this->load->library('session');
            $this->load->database();
            $this->db->select('*');
            $this->db->from('user');
            $this->db->join('admin','user.id_user = admin.id_user');
            $temp = $this->session->userdata('username');
            $this->db->where("user.userName","$temp");
            $result= $this->db->get();
            if($result->num_rows>0){
                    $this->load->library(("session"));
                    $this->session->set_userdata('admin',true);
                  $this->db->close();  
                return true;
            }else{
                  $this->db->close();  
                  $this->session->set_userdata('admin',false);
                return false;
            }
    }
    public function pengajuan($nama,$nik,$perihal){
        $this->load->database();
        $data = array('id_user'=>$this->getId() ,'nama' =>$nama ,'nik' => $nik, 'perihal'=> $perihal);
        $this->db->insert('pengajuan',$data);
    }
    private function getId():string{
        $this->load->database();
        $this->db->select('id_user');
        $this->db->from('user');
        $this->db->where('userName',$this->getUserName());
        return $this->db->get()->row()->id_user; 
    }
    public function  getPengajuan(){
        $this->load->database();
        $this->db->select('*');
        $this->db->from('pengajuan');
        $this->db->where('id_user',$this->getId());
        return $this->db->get();
    }
}
?>