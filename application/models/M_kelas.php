<?php 

class M_kelas extends CI_Model {

    public function getData(){

        $this->db->order_by('id_kelas', 'ASC');
        $querry = $this->db->get('kelas');
        return $querry;
    }

    public function insertData( $table, $data){
        $this->db->insert($table, $data);
    }

    public function getUpdate($table, $id){

        return $this->db->get_where($table, $id);
    }

    public function updateData( $table, $data, $id){

        $this->db->update($table, $data, $id);
    }

    public function getDetil($table, $where){

        return $this->db->get_where($table, $where);
    }
}
