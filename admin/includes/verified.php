<?php
	include '../../config.php';
    if (isset($_GET['verified'])) {
        $verifikasi = $_GET['verified'];
        $v_sql = "UPDATE tb_konseling SET verifikasi='sukses' WHERE id_konseling='$verifikasi'";

		$query_sql = mysqli_query($db, $v_sql);
        if ($query_sql) {
            $hasil = '<div class="alert alert-success" role="alert">
                      Verifikasi Berhasil.
                    </div>';
                header("refresh:1;index.php?p=input-konseling");
        } else {
            $hasil = '<div class="alert alert-danger" role="alert">
                      Verifikasi Gagal.
                    </div>';
                header("refresh:1;index.php?p=input-konseling");
        }
    }
?>