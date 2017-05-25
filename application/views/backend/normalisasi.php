<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <table id="myTable" class="table table-striped table-bordered table-hover">
          <thead>
              <td style="width: 200px">Kriteria</td>
              <td style="width: 150px">Jumlah Tanggungan</td>
              <td style="width: 150px">Gaji</td>
              <td style="width: 150px">IPK</td>
              <td style="width: 150px">Jumlah SKP</td>
              <td style="width: 150px">Rekening Listrik</td>
              <td style="width: 150px">Bobot</td>


          </thead>

          <?php
            foreach ($data['$normalisasi'] as $row) {
              ?>
          <tbody>
              <tr style="text-align: center;">
                    <td><?php echo $row['nama_kriteria'];  ?></td>
                    <td><?php echo $row['perbandinganke1'];  ?></td>
                    <td><?php echo $row['perbandinganke2'];  ?></td>
                    <td><?php echo $row['perbandinganke3'];  ?></td>
                    <td><?php echo $row['perbandinganke4'];  ?></td>
                    <td><?php echo $row['perbandinganke5'];  ?></td>
                     <td><?php echo $row['bobot'];  ?></td>

          </tr>
            </tbody>
            <?php
              }  ?>
          </table>
          <h3>Nilai Konsistensi: <?php echo $data['$konsisten'];  ?>
                    <?php if ($data['$konsisten']<=0.1||$data['$konsisten']=0) { ?>
                         (konsisten) </h3>
                    <?php }else { ?>
                         (tidak konsisten)  </h3>
                          <?php } ?>

        </div>
        <div class="col-md-1"></div>
      </div>

      <script>
        $(document).ready(function(){
            $('#myTable').DataTable();
        });
      </script>
