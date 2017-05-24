<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_perbandingan extends CI_Model {

public function GetKriteria($where=""){
	$data = $this->db->get('bobotkriteria'.$where);
	return $data->result_array();
	}



public function GetNormalisasi($where=""){
	$data = $this->db->get('normalisasi_kriteria'.$where);
	return $data->result_array();
	}
public function GetKonsisten($dimana=""){
	$this->db->select('*');
	$this->db->from('bobotkriteria');
	$this->db->join('normalisasi_kriteria', 'bobotkriteria.id_kriteria = normalisasi_kriteria.id_kriteria');

	$data = $this->db->get();
	return $data->result_array();
	}

public function EditKriteria($Namatabel,$data,$dimama){
	$edt= $this->db->update($Namatabel,$data,$dimama);
	return $edt;

}

}
?>
