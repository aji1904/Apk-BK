<?php
session_start();
	if (isset($_POST['cari-data'])) {
        $data = $_POST['cari_data'];

		$sql = "SELECT tb_konseling.*,tb_siswa.nama, tb_kelas.nama_kelas FROM tb_konseling
        JOIN tb_siswa ON tb_siswa.nis = tb_konseling.nis JOIN tb_kelas ON tb_kelas.id_kelas = tb_siswa.id_kelas WHERE date_format(tb_konseling.tgl, '%m %Y') = '$data' ";
        $query = mysqli_query($db, $sql);
        $sum_data = mysqli_num_rows($query);
		if ($sum_data > 0) {
			$hasil_cari = '<div class="alert alert-success" role="alert">
                      Berhasil Menemukan Data.
                    </div>';
                $_SESSION['cari_data'] = $sql;
                $_SESSION['data'] = $data;
                header("refresh:1;index.php?p=input-konseling");
		} else {
			$hasil_cari = '<div class="alert alert-danger" role="alert">
                      Gagal Menemukan Data.
                    </div>';
                header("refresh:1;index.php?p=input-konseling");
		}
} else if(isset($_POST['data_semua'])){
    unset($_SESSION['cari_data']);
    unset($_SESSION['data']);
    $hasil_cari = '<div class="alert alert-success" role="alert">
                      Berhasil Menampilkan Semua Data.
                    </div>';
    header("refresh:1;index.php?p=input-konseling");
}

?>

