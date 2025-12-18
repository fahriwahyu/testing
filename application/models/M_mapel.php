<?php 

class M_mapel extends CI_Model {

    public function getData(){

        $this->db->select('*');
        $this->db->from('mapel');
        $this->db->join('kelas', 'kelas.id_kelas = mapel.id_kelas', 'left');
        $this->db->order_by('id_mapel', 'ASC');
        $querry = $this->db->get('');
        return $querry;
    }

    public function insertData( $table, $data){
        $this->db->insert($table, $data);
    }

    public function getUpdate($table, $where){

        return $this->db->get_where($table, $where);
    }

    public function updateData( $table, $data, $where){

        $this->db->update($table, $data, $where);
    }
}
