<?php

class Model_mahasiswa extends CI_Model {

  public function all(){

    $result = $this->db->get('mahasiswa');

    if($result->num_rows() > 0){
      return $result->result();
    } else {
      return array();
    }
  }

  public function find($id){

  $hasil = $this->db->where('id', $id)
                    ->limit(1)
                    ->get('mahasiswa');
    if($hasil->num_rows() > 0){
      return $hasil->row();
    } else {
      return array();
    }
  }

  public function create($data_mhs){

    $this->db->insert('mahasiswa', $data_mhs);

  }
  public function update($id, $data_mhs){

    $this->db->where('id', $id)
             ->update('mahasiswa', $data_mhs);
  }
  public function delete($id){
    $this->db->where('id', $id)
             ->delete('mahasiswa');
  }
}

?>
