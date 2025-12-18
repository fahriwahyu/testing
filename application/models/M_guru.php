<?php 

class M_guru extends CI_Model {

    public function getData(){

        $this->db->order_by('nik', 'ASC');
        $querry = $this->db->get('guru');
        return $querry;
    }

    public function insertData($data, $photo){
        $this->db->insert('guru',$data, $photo);
    }

    public function getDetil($id){

        return $this->db->get_where('guru', $id);
    }

    public function updateData( $data, $id){

        $this->db->update('guru',$data, $id);

    }
}