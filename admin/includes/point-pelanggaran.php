<?php
	include '../../config.php';
	if (isset($_POST['simpan'])) {
		$nama = $_POST['nama_pelanggaran'];
		$jenis = $_POST['jenis_pelanggaran'];
		$point = $_POST['point'];
		$sql = "INSERT INTO tb_point (nama_pelanggaran, jenis_pelanggaran, point_pelanggaran) VALUES('$nama','$jenis','$point')";
		$query = mysqli_query($db, $sql);
		if ($query) {
			$hasil = '<div class="alert alert-success" role="alert">
                      Berhasil Menyimpan Data.
                    </div>';
				header("refresh:1;index.php?p=point-pelanggaran");
		} else {
			$hasil = '<div class="alert alert-danger" role="alert">
                      Gagal Menyimpan Data.
                    </div>';
                header("refresh:1;index.php?p=point-pelanggaran");
		}
	}
?>