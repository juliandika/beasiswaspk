<?php

class Kriteria extends CI_Controller {



  public function __construct() {
        parent::__construct();
        if ($this->session->userdata('username')=="") {
         redirect('login');
        }elseif($this->session->userdata('level') == '2'){
         redirect('spk_alternatif');
        }
              $this->load->helper('url');
              $this->load->model('model_mahasiswa');
              $this->load->model('model_perbandingan');

  }
  public function view_kriteria(){

    $data = $this->model_perbandingan->getKriteria();
    $this->load->view('templates/header');
    $this->load->view('backend/kriteria',array('data' =>$data));
  }

  public function view_edit_kriteria($id_kriteria){
    $data_k = $this->model_perbandingan->GetKriteria(" where id_kriteria = '$id_kriteria'");

		$data = array(
			'id_kriteria'	=> $data_k[0]['id_kriteria'],
			'nama_kriteria' => $data_k[0]['nama_kriteria'],

			);

    $this->load->view('templates/header');
		$this->load->view('backend/edit_kriteria',$data);
  }

  public function edit_kriteria()
	{


		$id_kriteria		= $_POST['id_kriteria'];
		$perbandingan_ke2	= $_POST['perbandingan_ke2'];
		$perbandingan_ke3	= $_POST['perbandingan_ke3'];
		$perbandingan_ke4	= $_POST['perbandingan_ke4'];
		$perbandingan_ke5	= $_POST['perbandingan_ke5'];

		if ($id_kriteria=='1') {
		$data_edit		= array(
						  'perbandingan_ke2' => $perbandingan_ke2,
						  'perbandingan_ke3' => $perbandingan_ke3,
						  'perbandingan_ke4' => $perbandingan_ke4,
						  'perbandingan_ke5' => $perbandingan_ke5
						  );
		$where=2;
		while ($where<=5) {
			if ($where=='2') {
				$perbandingan_ke=$perbandingan_ke2;
			}
			if ($where=='3') {
				$perbandingan_ke=$perbandingan_ke3;
			}
			if ($where=='4') {
				$perbandingan_ke=$perbandingan_ke4;
			}
			if ($where=='5') {
				$perbandingan_ke=$perbandingan_ke5;
			}

		$perbandingan= 1/$perbandingan_ke;
		$hasil_perbandingan= array('perbandingan_ke1' => $perbandingan);
		$where1 		= array( 'id_kriteria' => $where);
		$this->model_perbandingan->EditKriteria('bobotkriteria',$hasil_perbandingan,$where1);
		$where++;
		}
		}
		if ($id_kriteria=='2') {
		$data_edit		= array(

						  'perbandingan_ke3' => $perbandingan_ke3,
						  'perbandingan_ke4' => $perbandingan_ke4,
						  'perbandingan_ke5' => $perbandingan_ke5
						  );
		$where=3;
		while ($where<=5) {

			if ($where=='3') {
				$perbandingan_ke=$perbandingan_ke3;
			}
			if ($where=='4') {
				$perbandingan_ke=$perbandingan_ke4;
			}
			if ($where=='5') {
				$perbandingan_ke=$perbandingan_ke5;
			}

		$perbandingan= 1/$perbandingan_ke;
		$hasil_perbandingan= array('perbandingan_ke2' => $perbandingan);
		$where1 		= array( 'id_kriteria' => $where);
		$this->model_perbandingan->EditKriteria('bobotkriteria',$hasil_perbandingan,$where1);
		$where++;
		}
		}
		if ($id_kriteria=='3') {
		$data_edit		= array(
						  'perbandingan_ke4' => $perbandingan_ke4,
						  'perbandingan_ke5' => $perbandingan_ke5
						  );
		$where=4;
		while ($where<=6) {

			if ($where=='4') {
				$perbandingan_ke=$perbandingan_ke4;
			}
			if ($where=='5') {
				$perbandingan_ke=$perbandingan_ke5;
			}

		$perbandingan= 1/$perbandingan_ke;
		$hasil_perbandingan= array('perbandingan_ke3' => $perbandingan);
		$where1 		= array( 'id_kriteria' => $where);
		$this->model_perbandingan->EditKriteria('bobotkriteria',$hasil_perbandingan,$where1);
		$where++;
		}
		}
		if ($id_kriteria=='4') {
		$data_edit		= array(
						  'perbandingan_ke5' => $perbandingan_ke5
						  );
		$where=5;
		while ($where<=6) {

			if ($where=='5') {
				$perbandingan_ke=$perbandingan_ke5;
			}

		$perbandingan= 1/$perbandingan_ke;
		$hasil_perbandingan= array('perbandingan_ke4' => $perbandingan);
		$where1 		= array( 'id_kriteria' => $where);
		$this->model_perbandingan->EditKriteria('bobotkriteria',$hasil_perbandingan,$where1);
		$where++;
		}
		}
		if ($id_kriteria=='5') {
		$data_edit		= array(
						  'perbandingan_ket6' => $perbandingan_ke6
						  );
		$where=6;
		while ($where<=6) {

			if ($where=='6') {
				$perbandingan_ke=$perbandingan_ke6;
			}

		$perbandingan= 1/$perbandingan_ke;
		$hasil_perbandingan= array('perbandingan_ke5' => $perbandingan);
		$where1 		= array( 'id_kriteria' => $where);
		$this->mspk->EditKriteria('bobotkriteria',$hasil_perbandingan,$where1);
		$where++;
		}
		}


		$dimana 		= array( 'id_kriteria' => $id_kriteria);


		$edt = $this->model_perbandingan->EditKriteria('bobotkriteria',$data_edit,$dimana);

		if($edt>=1){
			echo "<script>
				alert('data berhasil ditambahkan');
				</script>";
				redirect('admin/kriteria/view_kriteria');
		}
		else{
			echo "<script>
				alert('data gagal ditambahkan');
				</script>";
		}


	}




  public function normalisasi()
    {

        $data=$this->model_perbandingan->GetKriteria();
        $jum_kol1 = 0;$jum_kol2 = 0;$jum_kol3 = 0;$jum_kol4 = 0;$jum_kol5 = 0;
        foreach($data as $row){
         $jum_kol1 += str_replace(",", "", $row['perbandingan_ke1']);
         $jum_kol2 += str_replace(",", "", $row['perbandingan_ke2']);
         $jum_kol3 += str_replace(",", "", $row['perbandingan_ke3']);
         $jum_kol4 += str_replace(",", "", $row['perbandingan_ke4']);
         $jum_kol5 += str_replace(",", "", $row['perbandingan_ke5']);

        }
        $where=1;


        foreach($data as $row){
        $hasil_bagi1=$row['perbandingan_ke1']/$jum_kol1;
        $hasil_bagi2=$row['perbandingan_ke2']/$jum_kol2;
        $hasil_bagi3=$row['perbandingan_ke3']/$jum_kol3;
        $hasil_bagi4=$row['perbandingan_ke4']/$jum_kol4;
        $hasil_bagi5=$row['perbandingan_ke5']/$jum_kol5;

        $bbot=($hasil_bagi1+$hasil_bagi2+$hasil_bagi3+$hasil_bagi4+$hasil_bagi5)/5;
        $hasil_perbandingan= array( 'perbandinganke1' => $hasil_bagi1,
                      'perbandinganke2' => $hasil_bagi2,
                      'perbandinganke3' => $hasil_bagi3,
                      'perbandinganke4' => $hasil_bagi4,
                      'perbandinganke5' => $hasil_bagi5,
                      'bobot' => $bbot);
        $where1 		= array( 'id_kriteria' => $where);
        $this->model_perbandingan->EditKriteria('normalisasi_kriteria',$hasil_perbandingan,$where1);
        $where++;




      }

      //mengecek konsisten
      $data=$this->model_perbandingan->GetKonsisten();
      $i=1;
      foreach ($data as $row) {

          $bobot[$i]=$row['bobot'];

          $i++;
        }

      $i=1;
      foreach ($data as $row) {

      $kali_matrik[$i]=($row['perbandingan_ke1']*$bobot[1])+($row['perbandingan_ke2']*$bobot[2])+($row['perbandingan_ke3']*$bobot[3])+($row['perbandingan_ke4']*$bobot[4])+($row['perbandingan_ke5']*$bobot[5]);
        //echo $kali_matrik[$i],'<br>';
        $i++;
      }






      $konsisten=($kali_matrik[1]/$bobot[1]+$kali_matrik[2]/$bobot[2]+$kali_matrik[3]/$bobot[3]+$kali_matrik[4]/$bobot[4]+$kali_matrik[5]/$bobot[5])/5;
      //echo $konsisten,'<br>';


      $ci=($konsisten-5)/4;
      $data['$konsisten']=$ci/1.12;



      $data['$normalisasi']=$this->model_perbandingan->GetNormalisasi();
      $this->load->view('templates/header');
      $this->load->view('backend/normalisasi',array('data' =>$data));

    }


}
