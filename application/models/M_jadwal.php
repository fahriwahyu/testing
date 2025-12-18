<?php 

class M_jadwal extends CI_Model {

    public function getData($id_kelas){

        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->join('ta', 'ta.id_ta = jadwal.id_ta', 'left');
        $this->db->join('kelas', 'kelas.id_kelas = jadwal.id_kelas', 'left');
        $this->db->join('mapel', 'mapel.id_mapel = jadwal.id_mapel', 'left');
        $this->db->join('guru', 'guru.id_guru = jadwal.id_guru', 'left');
        $this->db->where('jadwal.id_kelas', $id_kelas);
        $this->db->order_by('semester', 'ASC');
        $querry = $this->db->get('');
        return $querry;
    }

    public function insertData($table ,$data){
        $this->db->insert($table, $data);
    }

    public function getKlsMapel($id_kelas){
        $this->db->select('*');
        $this->db->from('mapel');
        $this->db->where('mapel.id_kelas', $id_kelas);
        $this->db->order_by('semester', 'ASC');
        $querry = $this->db->get();
        return $querry;
    }

    public function getDetil($id){

        return $this->db->get_where('guru', $id);
    }

    public function updateData( $data, $id){

        $this->db->update('guru',$data, $id);

    }
}