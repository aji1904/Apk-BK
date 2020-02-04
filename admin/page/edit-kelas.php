<?php
include '../../config.php';
include 'includes/edit-kelas.php';

$id = $_GET['id'];
$select = mysqli_query($db, "SELECT * FROM tb_kelas JOIN tb_jurusan ON tb_jurusan.id_jurusan=tb_kelas.id_jurusan WHERE tb_kelas.id_kelas='$id' ");
$data= mysqli_fetch_assoc($select);
?>

<div class="container mt-3">
  <div class="card">
    <div class="card-header">
      Edit Data Kelas
    </div>
    <div class="card-body">
      <form method="POST" action="">
        <?php
        echo $hasil;
      ?>
        <div class="form-row">
         <div class="col-md-6 mb-3">
            <label for="Jurusan">Nama Jurusan</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01"><i>Jurusan</i></label>
                <input class="form-control" type="text" value="<?= $data['nama_jurusan']?>" readonly>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationDefault02">Nama Kelas</label>
            <input class="form-control" id="validationDefault02" placeholder="Nama Kelas" name="nama_kelas" required="" type="text" value="<?= $data['nama_kelas']?>">
			<input type="hidden" value="<?= $id?>" name="id">
		  </div>
          <div class="col-md-6 mb-3">
            <label for="wali_kelas">Wali Kelas</label>
            <input  class="form-control" name="wali_kelas" placeholder="Wali Kelas" required="" value="<?= $data['wali_kelas']?>"/>
			<input type="hidden" value="<?= $id?>" name="id">
		  </div>
          <div class="col-md-6 mb-3">
            <label for="wali_kelas">NIP Wali Kelas</label>
            <input  class="form-control" name="nip_wali" placeholder="NIP Wali Kelas" required="" value="<?= $data['nip_wali']?>"/>
			<input type="hidden" value="<?= $id?>" name="id">
		 </div>
        </div>
        <input type="submit" name="edit-kelas" value="Edit Data Kelas" class="btn btn-primary">
		<td><a href="index.php?p=input-kelas" class="btn btn-sm btn-warning"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a></td>
	  </form>
    </div>
    <div class="card-footer text-muted">
      <i>Pastikan data yang anda input telah benar sebelum menyimpan data.</i>
    </div>
  </div>
</div>