<?php
	include '../../config.php';
    if (isset($_POST['edit-jurusan'])) {
        $id_jurusan = $_POST['id'];
        $nama_jurusan = $_POST['nama_jurusan'];
        $ketua_jurusan = $_POST['ketua_jurusan'];
        $edit_sql = "UPDATE tb_jurusan SET nama_jurusan='$nama_jurusan', ketua_jurusan='$ketua_jurusan' WHERE id_jurusan='$id_jurusan'";

		$query_sql = mysqli_query($db, $edit_sql);
        if ($query_sql) {
            $hasil = '<div class="alert alert-success" role="alert">
                      Berhasil Mengedit Data.
                    </div>';
                header("refresh:1;index.php?p=input-jurusan");
        } else {
            $hasil = '<div class="alert alert-danger" role="alert">
                      Gagal Mengedit Data.
                    </div>';
                header("refresh:1;index.php?p=input-jurusan");
        }
    }
?>