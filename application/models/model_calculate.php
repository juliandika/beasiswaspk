<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_calculate extends CI_Model {

  public function Ranking($Namatabel,$data){
    	$this->db->select('*');
    	$this->db->from('mahasiswa');
    	$this->db->join('ranking', 'mahasiswa.nama = ranking.nama_mhs');

    	$data = $this->db->get();
    	return $data->result_array();
	} */

  public function GetRanking(){
    	$this->db->order_by('nilai','DESC');
    	$ranking= $this->db->get('ranking' );
    	return $ranking->result_array();

  }

}
