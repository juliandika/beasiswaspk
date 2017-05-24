<?php
  $id           = $mhs->id;

if($this->input->post('is_submitted')){

  $nama                 = set_value('nama');
  $jeniskelamin         = set_value('jeniskelamin');
  $tanggal              = set_value('tanggal');
  $bulan                = set_value('bulan');
  $tahun                = set_value('tahun');
  $agama                = set_value('agama');
  $alamat               = set_value('alamat');
  $kecamatan            = set_value('kecamatan');
  $kabupaten            = set_value('kabupaten');


} else {

  $nama                 = $mhs->nama;
  $jeniskelamin         = $mhs->jeniskelamin;
  $tanggal              = $mhs->tanggal;
  $bulan                = $mhs->bulan;
  $tahun                = $mhs->tahun;
  $agama                = $mhs->agama;
  $alamat               = $mhs->alamat;
  $kecamatan            = $mhs->kecamatan;
  $kabupaten            = $mhs->kabupaten;


}

?>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <h1>Edit Data Mahasiswa</h1>

        <div><?= validation_errors() ?></div>
        <?= form_open_multipart('admin/mahasiswa/update/' . $id, ['class'=>'form-horizontal'])?>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama" placeholder="" value="<?= $nama ?>">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Jenis Kelamin</label>
            <div class="col-sm-10">
            <div class="radio">
              <label class="radio">
                <?php echo form_radio("jeniskelamin", "Pria", set_radio("jeniskelamin","Pria")); ?> Pria
              </label>
            </div>
            <div class="radio">
              <label class="radio">
                <?php echo form_radio("jeniskelamin", "Wanita", set_radio("jeniskelamin","Wanita")); ?> Wanita
              </label>
            </div>
          </div>
          </div>

          <div class="form-group">
            <label for="exampleSelect2" class="col-sm-2 control-label">Tanggal</label>
            <div class="col-sm-10">
              <select class="form-control" name="tanggal" id="tanggal" value="<?= $tanggal ?>">
                <option value="<?= $tanggal?>"><?= $tanggal ?></option>
              </select>
            </div>
            <input type="hidden" id="tanggalHidden">
          </div>

          <div class="form-group">
            <label for="exampleSelect2" class="col-sm-2 control-label">Bulan</label>
            <div class="col-sm-10">
              <select class="form-control" id="bulan" name="bulan" value="<?= set_value('bulan') ?>" onblur="buatTanggal();">
                <option value="<?= $bulan?>"><?= $bulan ?></option>
                <option value="Januari" onclick="document.getElementById('tanggalHidden').value=31">Januari</option>
                <option value="Pebruari" onclick="document.getElementById('tanggalHidden').value=29">Februari</option>
                <option value="Maret" onclick="document.getElementById('tanggalHidden').value=31">Maret</option>
                <option value="April" onclick="document.getElementById('tanggalHidden').value=30">April</option>
                <option value="Mei" onclick="document.getElementById('tanggalHidden').value=31">Mei</option>
                <option value="Juni" onclick="document.getElementById('tanggalHidden').value=30">Juni</option>
                <option value="Juli" onclick="document.getElementById('tanggalHidden').value=31">Juli</option>
                <option value="Agustus" onclick="document.getElementById('tanggalHidden').value=30">Agustus</option>
                <option value="September" onclick="document.getElementById('tanggalHidden').value=31">September</option>
                <option value="Oktober" onclick="document.getElementById('tanggalHidden').value=30">Oktober</option>
                <option value="November" onclick="document.getElementById('tanggalHidden').value=31">November</option>
                <option value="Desember" onclick="document.getElementById('tanggalHidden').value=30">Desember</option>
              </select>
            </div>
            <input type="hidden" id="tanggalHidden">
          </div>

          <div class="form-group">
            <label for="exampleSelect2" class="col-sm-2 control-label">Tahun</label>
            <div class="col-sm-10">
              <select class="form-control" id="tahun" name="tahun" value="<?= $tahun?>">
                <option value="<?= $tahun ?>"><?= $tahun ?></option>
                <option value="1994">1994</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleSelect2" class="col-sm-2 control-label">Agama</label>
            <div class="col-sm-10">
            <select class="form-control" id="agama" name="agama" value="<?= $agama ?>">
              <option value="<?= $agama ?>"><?= $agama ?></option>
              <option value="Hindu">Hindu</option>
              <option value="Buddha">Buddha</option>
              <option value="Kristen">Kristen</option>
              <option value="Katholik">Katholik</option>
              <option value="Islam">Islam</option>
              <option value="Konghucu">Konghucu</option>
            </select>
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-10">
              <textarea class="form-control" rows="5" name="alamat" placeholder="" value="<?= $alamat ?>"><?= $alamat ?></textarea>
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Kecamatan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="kecamatan" placeholder="" value="<?= $kecamatan ?>">
            </div>
          </div>

          <div class="form-group">
            <label for="exampleSelect2" class="col-sm-2 control-label">Kabupaten</label>
            <div class="col-sm-10">
            <select class="form-control" id="kabupaten" name="kabupaten" value="<?= $kabupaten ?>">
              <option value="<?= $kabupaten?>"><?= $kabupaten ?></option>
              <option value="Badung">Badung</option>
              <option value="Bangli">Bangli</option>
              <option value="Buleleng">Buleleng</option>
              <option value="Denpasar">Denpasar</option>
              <option value="Jembrana">Jembrana</option>
              <option value="Gianyar">Gianyar</option>
              <option value="Karangasem">Klungkung</option>
              <option value="Klungkung">Karangasem</option>
              <option value="Klungkung">Tabanan</option>
            </select>
            </div>
          </div>

          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Upload Foto</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" name="userfile"/>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Save</button>
            </div>
          </div>
        <?= form_close() ?>
      </div>
    <div class="col-md-1"></div>
    <script>
      function buatTanggal() {
        var select = document.getElementById('tanggal');
        var lg = select.options.length;
        for (var i = lg - 1; i >= 1; i--) {
          select.remove(i);
        }
        for (var i = 1; i <= document.getElementById('tanggalHidden').value; i++) {
          var option=document.createElement('option');
          option.value=i;
          option.innerHTML=i;
          select.appendChild(option);
        }
      }
    </script>
  </div>
