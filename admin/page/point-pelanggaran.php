<?php
  session_start();
  $hasil ="";
  include 'includes/point-pelanggaran.php';
  include 'includes/hapus.php';
  include 'includes/edit-point.php';
  echo $hasil;
?>
 

<div class="container mt-3">
  <div class="card">
    <div class="card-header">
      Input Data Pelanggaran
    </div>
    <div class="card-body">
      <form method="POST">
        <?php
        echo $hasil;
      ?>
        <div class="form-row">
         <div class="col-md-6 mb-3">
            <label for="jenis">Jenis Pelanggaran</label>
            <div class="input-group">
              <select class="custom-select" id="jenis" name="jenis_pelanggaran" required="">
                <option selected="selected">Choose...</option>
                <option value="Ringan"> Pelanggaran Ringan </option>
                <option value="Sedang"> Pelanggaran Sedang </option>
                <option value="Berat"> Pelanggaran Berat </option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationDefault02">Nama Pelanggaran</label>
            <input class="form-control" id="validationDefault02" placeholder="Nama Pelanggaran" name="nama_pelanggaran" required="" type="text">
          </div>
          <div class="col-md-6 mb-3">
            <label for="point">Point Pelanggaran</label>
            <input  class="form-control" id="point" name="point" type="number" />
          </div>
        </div>
        <input type="submit" name="simpan" value="Simpan " class="btn btn-primary">
      </form>
    </div>
    <div class="card-footer text-muted">
      <i>Pastikan data yang anda input telah benar sebelum menyimpan data.</i>
    </div>
  </div>
</div>


<br>
<div class="row">
    <div class="container col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">     
      <div class="card mb-3">
        <div class="card-header">
          <h3></i>Data Point Pelanggaran</h3><br>
		  <a href="page/cetak-point.php" target="_Blank" class="btn btn-info btn-sm" data-toggle="tooltip"><i class="fa fa-print"></i> Cetak Data Point</a>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-responsive-xl table-hover display">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Pelanggaran</th>
                <th>jenis pelanggaran</th>
                <th>Point Pelanggaran </th>
                <th>Aksi</th>
              </tr>
            </thead> 
            <?php
              $sql = "SELECT * FROM tb_point ";
              $query = mysqli_query($db, $sql);
            ?>                         
            <tbody>
              <?php
                $x=0;
                while($ambil_data = mysqli_fetch_array($query)){
                $x++;
              ?>
              <tr>
                <td><?php echo $x ?></td>
                <td><?php echo $ambil_data['nama_pelanggaran'] ?></td>
                <td><?php echo $ambil_data['jenis_pelanggaran'] ?></td>
                <td><?php echo $ambil_data['point_pelanggaran'] ?></td>
                <td align="center">
                  <a href="javascript:;" data-id="<?php echo $ambil_data['id_point'] ?>" data-toggle="modal" data-target="#hapus-point" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                  <a href="index.php?p=edit-point&id_point=<?= $ambil_data['id_point']?>" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                </td>
              </tr>
              <?php
                }
              ?>
            </tbody>
          </table>
        </div>                            
      </div><!-- end card-->          
    </div>
</div>


<!-- Modals Hapus -->
      <!-- Modals Hapus Data -->
      <div id="hapus-point" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Konfirmasi</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <strong> Apakah Anda yakin ingin menghapus data ini ? <br> </strong>
        </div>
        <div class="modal-footer">
          <a href="javascript:;" class="btn btn-danger" id="hapus-true-data">Hapus</a>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Tidak</button>
        </div>
        </div>
      </div>
    </div>
     <!-- End Modals -->
<!-- End Modals -->