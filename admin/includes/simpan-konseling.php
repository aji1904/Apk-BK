<?php
	if (isset($_POST['simpan-konseling'])) {
		$id_konseling = $_POST['id_konseling'];
		$tgl 		= $_POST['tgl'];
		$nis 		= $_POST['nis'];
		$keterangan = $_POST['keterangan'];
		$bid_bimbingan = $_POST['bid_bimbingan'];
		$tindak_lanjut = $_POST['tindak_lanjut'];
		$id = $_POST['nama_pelanggaran'];

		$sql = "INSERT INTO tb_konseling (id_konseling, tgl, nis, keterangan, bid_bimbingan, tindak_lanjut, id_point) VALUES('$id_konseling','$tgl','$nis','$keterangan','$bid_bimbingan','$tindak_lanjut', '$id')";
		$query = mysqli_query($db, $sql);
		if ($query) {
			$hasil = '<div class="alert alert-success" role="alert">
                      Berhasil Menyimpan Data.
                    </div>';
				header("refresh:1;index.php?p=input-konseling");
		} else {
			$hasil = '<div class="alert alert-danger" role="alert">
                      Gagal Menyimpan Data.
                    </div>';
                header("refresh:1;index.php?p=input-konseling");
		}
}
?>