<?php
	include '../../config.php';
    if (isset($_POST['edit-point'])) {
        $id = $_POST['id_point'];
        $nama = $_POST['nama'];
        $jenis = $_POST['jenis'];
        $point = $_POST['point'];
        $edit_sql = "UPDATE tb_point SET nama_pelanggaran='$nama', jenis_pelanggaran='$jenis', point_pelanggaran='$point' WHERE id_point='$id'";
        
		$query_sql = mysqli_query($db, $edit_sql);
        if ($query_sql) {
            $hasil = '<div class="alert alert-success" role="alert">
                      Berhasil Mengedit Data.
                    </div>';
                header("refresh:1;index.php?p=point-pelanggaran");
        } else {
            $hasil = '<div class="alert alert-danger" role="alert">
                      Gagal Mengedit Data.
                    </div>';
                header("refresh:1;index.php?p=point-pelanggaran");
        }
    }
?>