<div class="row">
    <div class="col-md-1"></div>

    <div class="col-md-10">
        <h1>Tambah Data Mahasiswa</h1>

        <div>
          <?= validation_errors() ?>
        </div>
        <?= form_open_multipart('admin/mahasiswa/create', ['class'=>'form-horizontal'])?>

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" placeholder="" value="<?= set_value('nama') ?>">
              </div>
            </div>



            <div class="form-group">
              <label for="exampleSelect2" class="col-sm-2 control-label">Gaji Orang Tua</label>
              <div class="col-sm-10">
                <select class="form-control" id="gaji" name="gaji" value="<?= set_value('gaji') ?>">
                  <option value="<?= set_value('gaji') ?>">Pilih gaji</option>
                  <option value="6"> di bawah 500.000</option>
                  <option value="5">500.000 - 1.500.000</option>
                  <option value="4">1.500.001 - 2.500.000</option>
                  <option value="3">2.500.001 - 3.500.000</option>
                  <option value="2">3.500.001 - 4.500.000</option>
                  <option value="1">di atas 4.500.000</option>
                </select>
              </div>
            </div>


            <div class="form-group">
              <label for="exampleSelect2" class="col-sm-2 control-label">IPK</label>
              <div class="col-sm-10">
                <select class="form-control" id="ipk" name="ipk" value="<?= set_value('ipk') ?>">
                  <option value="<?= set_value('ipk') ?>">Pilih IPK</option>
                  <option value="1">di bawah 2.00</option>
                  <option value="2">2.01 - 2.25</option>
                  <option value="3">2.26 - 2.50</option>
                  <option value="4">2.51 - 2.75</option>
                  <option value="5">2.76 - 3.00</option>
                  <option value="6">3.01 - 3.25</option>
                  <option value="7">3.26 - 3.50</option>
                  <option value="6">3.51 - 3.75</option>
                  <option value="6">3.75 - 4.00</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleSelect2" class="col-sm-2 control-label">Jumlah Tanggungan Orang Tua</label>
              <div class="col-sm-10">
                <select class="form-control" id="jml_tanggungan" name="jml_tanggungan" value="<?= set_value('jml_tanggungan') ?>">
                  <option value="<?= set_value('jml_tanggungan') ?>">Pilih Jumlah Tanggungan</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">di atas 3</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleSelect2" class="col-sm-2 control-label">Voltase Listrik</label>
              <div class="col-sm-10">
                <select class="form-control" id="listrik" name="listrik" value="<?= set_value('listrik') ?>">
                  <option value="<?= set_value('listrik') ?>">Pilih voltase</option>
                  <option value="3">0 - 450</option>
                  <option value="2">450 - 900</option>
                  <option value="1">di atas 900</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleSelect2" class="col-sm-2 control-label">Jumlah Poin SKP</label>
              <div class="col-sm-10">
                <select class="form-control" id="jml_skp" name="jml_skp" value="<?= set_value('skp') ?>">
                  <option value="<?= set_value('jmlskp') ?>">Jumlah Poin SKP</option>
                  <option value="1">0 - 25</option>
                  <option value="2">26 - 50</option>
                  <option value="3">51 - 75</option>
                  <option value="4">76 - 100</option>
                  <option value="5">di atas 100</option>
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

  </div>
