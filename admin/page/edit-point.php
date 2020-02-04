<?php
include '../../config.php';
include 'includes/edit-point.php';

$id = $_GET['id_point'];
$select = mysqli_query($db, "SELECT * FROM tb_point WHERE id_point = '$id' ");
$data= mysqli_fetch_assoc($select);
?>

<div class="container mt-3">
  <div class="card">
    <div class="card-header">
      Edit Data Pelanggaran
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
              <select class="custom-select" id="jenis" name="jenis" required="">
                <option value="Ringan"  <?php if($data['jenis_pelanggaran'] == 'Ringan'){ echo 'selected'; }?>> Pelanggaran Ringan </option>
                <option value="Sedang" <?php if($data['jenis_pelanggaran'] == 'Sedang'){ echo 'selected'; }?>> Pelanggaran Sedang </option>
                <option value="Berat" <?php if($data['jenis_pelanggaran'] == 'Berat'){ echo 'selected'; }?>> Pelanggaran Berat </option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationDefault02">Nama Pelanggaran</label>
            <input class="form-control" id="validationDefault02" placeholder="Nama Pelanggaran" name="nama" required="" type="text" value="<?= $data['nama_pelanggaran'] ?>">
          </div>
          <div class="col-md-6 mb-3">
            <label for="point">Point Pelanggaran</label>
            <input  class="form-control" id="point" name="point" type="number" value="<?= $data['point_pelanggaran']?>" />
          </div>
          <input name="id_point" type="hidden" value="<?= $data['id_point']?>" />

        </div>
        <input type="submit" name="edit-point" value="Update " class="btn btn-primary">
      </form>
    </div>
    <div class="card-footer text-muted">
      <i>Pastikan data yang anda input telah benar sebelum menyimpan data.</i>
    </div>
  </div>
</div>
