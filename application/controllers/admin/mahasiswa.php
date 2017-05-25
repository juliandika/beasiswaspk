<?php

class Mahasiswa extends CI_Controller {

  public function __construct(){
    parent::__construct();


    if ($this->session->userdata('username')=="") {
        redirect('login/index');
    }elseif($this->session->userdata('level') == '2'){
      redirect('spk_alternatif');

    }

    $this->load->model('model_mahasiswa');
  }

  public function index(){

    $data['mahasiswa'] = $this->model_mahasiswa->all();

    $data['title'] = 'Lihat Data';

    $this->load->view('templates/header');
    $this->load->view('backend/tampilkan_data', $data);
    $this->load->view('templates/footer');
  }

  public function create(){

		$this->form_validation->set_rules(
      'nama',
      '', 'required', array("required"=>"Anda belum mengisi nama."));
    $this->form_validation->set_rules(
      'gaji',
      '', 'required', array("required"=>"Anda belum mengisi form gaji."));
    $this->form_validation->set_rules(
      'ipk',
        '', 'required', array("required"=>"Anda belum mengisi form IPK."));
    $this->form_validation->set_rules(
      'jml_tanggungan',
        '', 'required', array("required"=>"Anda belum mengisi form jumlah tanggungan."));
    $this->form_validation->set_rules(
      'listrik',
        '', 'required', array("required"=>"Anda belum mengisi form listrik."));
    $this->form_validation->set_rules(
      'jml_skp',
        '', 'required', array("required"=>"Anda belum mengisi form jml skp."));

    if(empty($_FILES['userfile']['name'])){
		$this->form_validation->set_rules('userfile', '', 'required', array("required"=>"Anda belum mengupload foto."));
    }


		if($this->form_validation->run() === FALSE){
      $this->load->view('templates/header');
			$this->load->view('backend/tambah_data');
      $this->load->view('templates/footer');

		}else{
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size'] = '30000';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload()){

        $this->load->view('templates/header');
				$this->load->view('backend/tambah_data');
        $this->load->view('templates/footer');

			} else {

				$gambar = $this->upload->data();

				$data_mhs = array(
					'nama'				               => set_value('nama'),
          'gaji'				               => set_value('gaji'),
          'ipk'				                 => set_value('ipk'),
          'jml_tanggungan'				     => set_value('jml_tanggungan'),
          'listrik'				             => set_value('listrik'),
          'jml_skp'				             => set_value('jml_skp'),
					'image'				               => $gambar['file_name']

				);
				$this->model_mahasiswa->create($data_mhs);
				redirect('admin/mahasiswa');
			}


		}
	}
	public function update($id){

    $this->form_validation->set_rules(
      'nama',
      '', 'required', array("required"=>"Anda belum mengisi nama."));
    $this->form_validation->set_rules(
      'jeniskelamin',
      '', 'required', array("required"=>"Anda belum mengisi form jenis kelamin."));
    $this->form_validation->set_rules(
      'tanggal',
      '', 'required', array("required"=>"Anda belum mengisi tanggal lahir."));
    $this->form_validation->set_rules(
      'bulan',
      '', 'required', array("required"=>"Anda belum mengisi bulan lahir."));
    $this->form_validation->set_rules(
      'tahun',
      '', 'required', array("required"=>"Anda belum mengisi tahun lahir."));
    $this->form_validation->set_rules(
      'agama',
      '', 'required', array("required"=>"Anda belum mengisi agama."));
    $this->form_validation->set_rules(
      'alamat',
      '', 'required', array("required"=>"Anda belum mengisi alamat."));
    $this->form_validation->set_rules(
      'kecamatan',
      '', 'required', array("required"=>"Anda belum mengisi kecamatan."));
    $this->form_validation->set_rules(
      'kabupaten',
      '', 'required', array("required"=>"Anda belum mengisi kabupaten."));

		if($this->form_validation->run() === FALSE)
		{
			$data['mhs'] = $this->model_mahasiswa->find($id);

      $this->load->view('templates/header');
			$this->load->view('backend/edit_data', $data);
      $this->load->view('templates/footer');

		} else {
				if($_FILES['userfile']['name'] != ''){

					$config['upload_path'] = './uploads/';
					$config['allowed_types'] = 'jpg|png';
					$config['max_size'] = '30';
					$config['max_width'] = '20';
					$config['max_height'] = '20';

					$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){

					$data['mhs'] = $this->model_mahasiswa->find($id);
					$this->load->view('backend/edit_data', $data);

				} else {

						$gambar = $this->upload->data();
						$data_mhs = array(
              'nama'				      => set_value('nama'),
    					'jeniskelamin'	    => set_value('jeniskelamin'),
    					'tanggal'				    => set_value('tanggal'),
              'bulan'				      => set_value('bulan'),
              'tahun'				      => set_value('tahun'),
              'agama'				      => set_value('agama'),
              'alamat'				    => set_value('alamat'),
              'kecamatan'				  => set_value('kecamatan'),
              'kabupaten'				  => set_value('kabupaten'),
							'image'				      => $gambar['file_name']

						);
						$this->model_mahasiswa->update($id, $data_mhs);
						redirect('admin/mahasiswa');

					}
				} else {

					$data_mhs = array(
            'nama'				      => set_value('nama'),
            'jeniskelamin'	    => set_value('jeniskelamin'),
            'tanggal'				    => set_value('tanggal'),
            'bulan'				      => set_value('bulan'),
            'tahun'				      => set_value('tahun'),
            'agama'				      => set_value('agama'),
            'alamat'				    => set_value('alamat'),
            'kecamatan'				  => set_value('kecamatan'),
            'kabupaten'				  => set_value('kabupaten'),

					);
					$this->model_mahasiswa->update($id, $data_mhs);
					redirect('admin/mahasiswa');

				}
		}
	}
	public function delete($id){
		$this->model_mahasiswa->delete($id);
		redirect('admin/mahasiswa');

	}
}

?>
