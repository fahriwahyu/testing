<?php 

class M_user extends CI_Model {

    public function loginUser($username, $pass){

        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db->where('username', $username)
                           ->where('password', $pass)
                           ->limit(1)
                           ->get('admin');

        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    //cek nim dan password
    public function loginSiswa($username, $pass){
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db->where('nik', $username)
                            ->where('password', $pass)
                            ->limit(1)
                            ->get('siswa');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }
}