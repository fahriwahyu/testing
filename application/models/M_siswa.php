<?php 

class M_siswa extends CI_Model {

    public function getData(){

        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas', 'left');
        $this->db->order_by('nik', 'ASC');
        $querry = $this->db->get();
        return $querry;
    }

    public function insertData($table, $data, $photo){
        $this->db->insert($table, $data, $photo);
    }

    public function getDetil($table, $id){

        return $this->db->get_where($table, $id);
    }

    //ini adalah session

    public function getSession(){

        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas', 'left');
        $this->db->where('siswa.nik', $this->session->userdata('username'));
        $querry = $this->db->get();
        return $querry;
    }
}