<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<form style="position: fixed; top: 30%; left: 20%; width: 700px; " method="post" action="<?php echo base_url(); ?>admin/kriteria/edit_kriteria" ?>
			    	<div class="form-group">
				    <table style="text-align: center" class="table table-striped ">
            <input type="hidden" name="id_kriteria"  value="<?php echo $id_kriteria; ?>" >
            <?php if ($id_kriteria=='1') { ?>

              <tr>
                    <td style="width: 150px"><label><?php echo $nama_kriteria; ?></label></td>
                    <td style="width: 230px"><select class="form-control" name="perbandingan_ke2">
                    <option  value='1'>sama penting dari</option>
                    <option  value='3'>cukup penting dari</option>
                    <option  value='0.3333333333333333'>tidak cukup penting dari</option>
                    <option  value='5'>lebih penting dari</option>
                    <option  value='0.2'>tidak lebih penting dari</option>
                    <option  value='7'>sangat lebih penting dari</option>
                    <option  value='0.1428571428571429'>tidak sangat lebih penting dari</option>
                    <option  value='9'>mutlak lebih penting dari</option>
                    <option  value='0.1111111111111111'>tidak mutlak lebih penting dari</option>
                          </select></td>
                    <td style="width: 150px"><label>Gaji</label></td>
                    </tr>

            <?php } if ($id_kriteria=='1'|| $id_kriteria=='2') { ?>
              <tr>
                    <td style="width: 150px"><label><?php echo $nama_kriteria; ?></label></td>
                    <td style="width: 230px"><select class="form-control" name="perbandingan_ke3">
                    <option  value='1'>sama penting dari</option>
                    <option  value='3'>cukup penting dari</option>
                    <option  value='0.3333333333333333'>tidak cukup penting dari</option>
                    <option  value='5'>lebih penting dari</option>
                    <option  value='0.2'>tidak lebih penting dari</option>
                    <option  value='7'>sangat lebih penting dari</option>
                    <option  value='0.1428571428571429'>tidak sangat lebih penting dari</option>
                    <option  value='9'>mutlak lebih penting dari</option>
                    <option  value='0.1111111111111111'>tidak mutlak lebih penting dari</option>
                          </select></td>
                    <td style="width: 150px"><label>IPK</label></td>
                    </tr>
            <?php } if ($id_kriteria=='1'|| $id_kriteria=='2'|| $id_kriteria=='3' ) { ?>
              <tr>
                    <td style="width: 150px"><label><?php echo $nama_kriteria; ?></label></td>
                    <td style="width: 230px"><select class="form-control" name="perbandingan_ke4">
                    <option  value='1'>sama penting dari</option>
                    <option  value='3'>cukup penting dari</option>
                    <option  value='0.3333333333333333'>tidak cukup penting dari</option>
                    <option  value='5'>lebih penting dari</option>
                    <option  value='0.2'>tidak lebih penting dari</option>
                    <option  value='7'>sangat lebih penting dari</option>
                    <option  value='0.1428571428571429'>tidak sangat lebih penting dari</option>
                    <option  value='9'>mutlak lebih penting dari</option>
                    <option  value='0.1111111111111111'>tidak mutlak lebih penting dari</option>
                          </select></td>
                    <td style="width: 150px"><label>Jumlah SKP</label></td>
                    </tr>
              <?php } if ($id_kriteria=='1'|| $id_kriteria=='2'|| $id_kriteria=='3' || $id_kriteria=='4' ) { ?>
               <tr>
                    <td style="width: 150px"><label><?php echo $nama_kriteria; ?></label></td>
                    <td style="width: 230px"><select class="form-control" name="perbandingan_ke5">
                    <option  value='1'>sama penting dari</option>
                    <option  value='3'>cukup penting dari</option>
                    <option  value='0.3333333333333333'>tidak cukup penting dari</option>
                    <option  value='5'>lebih penting dari</option>
                    <option  value='0.2'>tidak lebih penting dari</option>
                    <option  value='7'>sangat lebih penting dari</option>
                    <option  value='0.1428571428571429'>tidak sangat lebih penting dari</option>
                    <option  value='9'>mutlak lebih penting dari</option>
                    <option  value='0.1111111111111111'>tidak mutlak lebih penting dari</option>
                          </select></td>
                    <td style="width: 150px"><label>Listrik</label></td>
                    </tr>
              <?php } if ($id_kriteria=='1'|| $id_kriteria=='2'|| $id_kriteria=='3' || $id_kriteria=='4' || $id_kriteria=='5' ) { ?>


                 <?php }  ?>

            </table>

				  <button type="submit" class="btn btn-primary">Ubah</button>
				 <button type="button" onclick="location.href='<?php echo base_url(); ?>/admin/kriteria'" class="btn btn-success">Kembali</button>
			</form>
	</div>
	<div class="col-md-1"></div>
</div>
