<?php 

class M_Krs extends CI_Model {

    public function getDataKrs($id_kelas){

        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->join('mapel', 'mapel.id_mapel = jadwal.id_mapel', 'left');
        $this->db->join('kelas', 'kelas.id_kelas = jadwal.id_kelas', 'left');
        $this->db->where('jadwal.id_kelas', $id_kelas);
        $this->db->order_by('semester', 'ASC');
        $querry = $this->db->get();
        return $querry;
    }

}