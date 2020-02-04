<?php
include '../../config.php';
include 'includes/edit-jurusan.php';

$id = $_GET['id'];
$select = mysqli_query($db, "SELECT * FROM tb_jurusan WHERE id_jurusan='$id' ");
$data= mysqli_fetch_assoc($select);
?>

<div class="container mt-4 col-xs-4">
  <div class="card">
    <div class="card-header">
      Edit Data Jurusan 
    </div>
    <div class="card-body">
      <?php
        echo $hasil;
      ?>
      <form method="POST" action="">
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="validationDefault02">Nama Jurusan</label>
            <input class="form-control" id="validationDefault02" placeholder="Input Nama Jurusan" name="nama_jurusan" required="" type="text" value="<?= $data['nama_jurusan']?>">
			<input type="hidden" value="<?= $id?>" name="id">
		  </div>
          <div class="col-md-8 mb-3">
            <label for="validationDefault02">Ketua Jurusan</label>
            <input class="form-control" id="validationDefault02" placeholder="Input Ketua Jurusan" name="ketua_jurusan" required="" type="text" value="<?= $data['ketua_jurusan']?>">
			<input type="hidden" value="<?= $id?>" name="id">
		  </div>
        </div>
        <input type="submit" name="edit-jurusan" value="Edit Data Jurusan" class="btn btn-primary">
		    <td><a href="index.php?p=input-jurusan" class="btn btn-sm btn-warning"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a></td>
      </form>
    </div>
    <div class="card-footer text-muted">
      <i>Pastikan data yang anda input telah benar sebelum menyimpan data.</i>
    </div>
  </div>
</div>
