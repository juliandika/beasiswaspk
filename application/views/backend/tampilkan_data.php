  <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <h1>Data Mahasiswa</h1>
        <table id="myTable" class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nama</th>
              <th>IPK</th>
              <th>Jumlah Tanggungan</th>
              <th>Gaji Orang Tua</th>
              <th>Jumlah SKP</th>
              <th>Tagihan Listrik</th>
              <th>Foto</th>
              <th>
                <?=anchor('admin/mahasiswa/create','Tambah Data', ['class'=>'btn btn-primary btn-sm'])?>
              </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($mahasiswa as $mhs) : ?>
            <tr>
              <td><?=$mhs->id?></td>
              <td><?=$mhs->nama?></td>
              <td><?=$mhs->ipk?></td>
              <td><?=$mhs->jml_tanggungan?></td>
              <td><?=$mhs->gaji?></td>
              <td><?=$mhs->jml_skp?></td>
              <td><?=$mhs->listrik?></td>

              <td><?php
                $product_image = ['src'   => 'uploads/' . $mhs->image,
                                  'height' => '50'];
              echo img($product_image)?></td>
              <td>
                <?=anchor('admin/mahasiswa/update/' . $mhs->id, 'Edit', ['class'=>'btn btn-default btn-sm'])?>
                <?=anchor('admin/mahasiswa/delete/' . $mhs->id, 'Hapus', ['class'=>'btn btn-danger btn-sm', 'onclick'=>'return confirm(\'Apakah anda yakin?\')'])?>
              </td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="col-md-1"></div>
    </div>

    <script>
      $(document).ready(function(){
          $('#myTable').DataTable();
      });
    </script>
