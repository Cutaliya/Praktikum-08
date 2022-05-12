<?php
class Dosen_model extends CI_Model{
    // Buat property atau variable
    public $id, $nama, $nidn, $pendidikan;
    
    public function getAll(){
        // menampilkan seluruh data yang ada ditable dosen menggunakan query builder
        $query = $this->db->get('dosen');
        return $query->result();
    }
    public function getById($id){
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('dosen', ['id' => $id]);
        return $query->row();
    }
}
?>