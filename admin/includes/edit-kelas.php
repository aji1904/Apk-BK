<?php
	include '../../config.php';
    if (isset($_POST['edit-kelas'])) {
        $id_kelas = $_POST['id'];
        $nama_kelas = $_POST['nama_kelas'];
        $wali_kelas = $_POST['wali_kelas'];
        $nip_wali = $_POST['nip_wali'];
        $edit_sql = "UPDATE tb_kelas SET nama_kelas='$nama_kelas', wali_kelas='$wali_kelas', nip_wali='$nip_wali' WHERE id_kelas='$id_kelas'";

		$query_sql = mysqli_query($db, $edit_sql);
        if ($query_sql) {
            $hasil = '<div class="alert alert-success" role="alert">
                      Berhasil Mengedit Data.
                    </div>';
                header("refresh:1;index.php?p=input-kelas");
        } else {
            $hasil = '<div class="alert alert-danger" role="alert">
                      Gagal Mengedit Data.
                    </div>';
                header("refresh:1;index.php?p=input-kelas");
        }
    }
?>