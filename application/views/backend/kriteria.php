<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <h1>Data Perbandingan</h1>
      <table id="myTable" class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>Nama Kriteria</th>
            <th>Perbandingan ke-1</th>
            <th>Perbandingan ke-2</th>
            <th>Perbandingan ke-3</th>
            <th>Perbandingan ke-4</th>
            <th>Perbandingan ke-5</th>
            <th>Edit</th>

          </tr>
        </thead>

        <?php

        $i = 1;
        foreach ($data as $row) { ?>
        <tbody>

          <tr>
            <td><?php echo $row['nama_kriteria'];  ?></td>
            <td><?php echo $row['perbandingan_ke1'];  ?></td>
            <td><?php echo $row['perbandingan_ke2'];  ?></td>
            <td><?php echo $row['perbandingan_ke3'];  ?></td>
            <td><?php echo $row['perbandingan_ke4'];  ?></td>
            <td><?php echo $row['perbandingan_ke5'];  ?></td>

            <td>

            <?php if ($i!=5) { ?>
              <a href="<?php echo base_url()."admin/kriteria/view_edit_kriteria/".$row['id_kriteria']; ?>"  class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

            <?php
            $i++;

          } ?>
            </td>
          </tr>
        <?php } ?>
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
