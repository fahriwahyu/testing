<?php 

class M_ta extends CI_Model {

    public function getData($table){

        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by('id_ta', 'DESC');
        $querry = $this->db->get();
        return $querry;
        }
    


    
}