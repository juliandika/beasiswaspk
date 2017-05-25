<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
<table id="myTable" class="table table-striped table-bordered table-hover">
                <thead>
                    <td style="width: 100px">No </td>
                    <td>Nama</td>
                    <td>Nilai</td>
                    <td style="width: 150px">Peringkat</td>



                </thead>

                   <?php

                $i=1;
                foreach ($data as $row ) {


 ?>

                <tbody>
              <tr style="text-align: center;">
                    <td><?php echo $i;  ?> </td>
                    <td><?php echo $row['nama'];  ?></td>
                    <td><?php echo $row['nilai'];  ?></td>
                    <td><?php echo  "Peringkat ".$i;  ?></td>


              </tr>
              </tbody>
              <?php
              $i++;
               }  ?>

          </table>
        </div>
      	<div class="col-md-1"></div>
      </div>
  <script>
    $(document).ready(function(){
        $('#myTable').DataTable();
    });
  </script>
  <!-- /.content-wrapper -->
