<?php

class Calculate extends CI_Controller {


  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('model_mahasiswa');

    if ($this->session->userdata('username')=="") {
         redirect('login');
        }elseif($this->session->userdata('level') == '2'){
         redirect('spk_alternatif');
        }
              $this->load->helper('url');
              $this->load->model('model_mahasiswa');
          }

  public function ranking(){

    $this->db->empty_table('ranking');

    $result = $this->model_mahasiswa->get();

    $jum_kol1 = 0;$jum_kol2 = 0;$jum_kol3 = 0;$jum_kol4 = 0;$jum_kol5 = 0;
		foreach($result as $row){

			 $jum_kol1 += str_replace(",", "", $row['jml_tanggungan']);
			 $jum_kol2 += str_replace(",", "", $row['gaji']);
			 $jum_kol3 += str_replace(",", "", $row['ipk']);
			 $jum_kol4 += str_replace(",", "", $row['jml_skp']);
			 $jum_kol5 += str_replace(",", "", $row['listrik']);

		}

    $getbobot=$this->model_perbandingan->GetKonsisten();
		$i=1;
		foreach ($getbobot as $row) {

				$bobot[$i]=$row['bobot'];

				$i++;
			}

		//bobot dari 6 kriteria pada orang pertama
		$i=1;
		foreach($result as $row){

			$bobotalternatif1[$i]=$row['jml_tanggungan']/$jum_kol1;
			$bobotalternatif2[$i]=$row['gaji']/$jum_kol2;
			$bobotalternatif3[$i]=$row['ipk']/$jum_kol3;
			$bobotalternatif4[$i]=$row['jml_skp']/$jum_kol4;
			$bobotalternatif5[$i]=$row['listrik']/$jum_kol5;


			//echo $bobotalternatif1[$i],'<br>'; echo $bobotalternatif2[$i],'<br>'; echo $bobotalternatif3[$i],'<br>';echo $bobotalternatif4[$i],'<br>';echo $bobotalternatif5[$i],'<br>';echo $bobotalternatif6[$i],'<br>','<br>';

			$i++;
		}


		//menentukan hasil kal matrik
		$i=1;
		foreach ($result as $row) {
			$nama_alternatif[$i]=$row['nama'];

			$hasil[$i]=($bobotalternatif1[$i]*$bobot[1])+($bobotalternatif2[$i]*$bobot[2])+($bobotalternatif3[$i]*$bobot[3])+($bobotalternatif4[$i]*$bobot[4])+($bobotalternatif5[$i]*$bobot[5]);
			//echo $hasil[$i],'<br>';
			$proses_kedatabase = array( 'nama' => $nama_alternatif[$i],
									    'nilai' => $hasil[$i]
										);
			$this->db->insert('ranking',$proses_kedatabase);
			$i++;

		}
				$data=$this->model_mahasiswa->GetRanking();
    $this->load->view('templates/header');
		$this->load->view('backend/ranking',array('data' =>$data));

	}

  }
