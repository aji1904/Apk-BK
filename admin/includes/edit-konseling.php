<?php
	include '../../config.php';
    if (isset($_POST['edit-konseling'])) {
        $id_konseling = $_POST['id'];
        $keterangan = $_POST['keterangan'];
        $bid_bimbingan = $_POST['bid_bimbingan'];
        $tindak_lanjut = $_POST['tindak_lanjut'];
        $id_point = $_POST['id_pelanggaran'];
        $hasil_bim = $_POST['hasil_bim'];
        $edit_sql = "UPDATE tb_konseling SET keterangan='$keterangan', bid_bimbingan='$bid_bimbingan', tindak_lanjut='$tindak_lanjut', id_point='$id_point', hasil_bim = '$hasil_bim' WHERE id_konseling='$id_konseling' ";
        $query_sql = mysqli_query($db, $edit_sql);
        if ($query_sql) {
            $hasil = '<div class="alert alert-success" role="alert">
                      Berhasil Mengedit Data.
                    </div>';
                header("refresh:1;index.php?p=input-konseling");
        } else {
            $hasil = '<div class="alert alert-danger" role="alert">
                      Gagal Mengedit Data.
                    </div>';
                header("refresh:1;index.php?p=input-konseling");
        }
    }
?>