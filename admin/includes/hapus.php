<?php
	include '../../config.php';
if (isset($_GET['id_konseling'])) {
	$id_konseling = $_GET['id_konseling'];
	$del_sql = "DELETE FROM tb_konseling WHERE id_konseling='$id_konseling'";
	$query_sql = mysqli_query($db, $del_sql);
	if ($query_sql) {
		$hasil = '<div class="alert alert-success" role="alert">
				  Berhasil Menghapus Data.
				</div>';
			header("refresh:1;index.php?p=input-konseling");
	} else {
		$hasil = '<div class="alert alert-danger" role="alert">
				  Gagal Menghapus Data.
				</div>';
			header("refresh:1;index.php?p=input-konseling");
	}
}
	if (isset($_GET['id_jurusan'])) {
		$nama_jurusan = $_GET['id_jurusan'];
			$del_sql = "DELETE FROM tb_jurusan WHERE nama_jurusan='$nama_jurusan'";
			$query_sql = mysqli_query($db, $del_sql);
			if ($query_sql) {
				$hasil = '<div class="alert alert-success" role="alert">
						  Berhasil Menghapus Data.
						</div>';
					header("refresh:1;index.php?p=input-jurusan");
			} else {
				$hasil = '<div class="alert alert-danger" role="alert">
						  Gagal Menghapus Data.
						</div>';
					header("refresh:1;index.php?p=input-jurusan");
			}
	}

	if (isset($_GET['id_kelas'])) {
		$nama_kelas = $_GET['id_kelas'];
		$del_sql = "DELETE FROM tb_kelas WHERE nama_kelas='$nama_kelas'";
		$query_sql = mysqli_query($db, $del_sql);
			if ($query_sql) {
				$hasil = '<div class="alert alert-success" role="alert">
						  Berhasil Menghapus Data.
						</div>';
					header("refresh:1;index.php?p=input-kelas");
			} else {
				$hasil = '<div class="alert alert-danger" role="alert">
						  Gagal Menghapus Data.
						</div>';
					header("refresh:1;index.php?p=input-kelas");
			}
	}

	if (isset($_GET['id_siswa'])) {
			$nis = $_GET['id_siswa'];
			$del_sql = "DELETE FROM tb_siswa WHERE nis='$nis'";
			$query_sql = mysqli_query($db, $del_sql);
			if ($query_sql) {
				$hasil = '<div class="alert alert-success" role="alert">
						  Berhasil Menghapus Data.
						</div>';
					header("refresh:1;index.php?p=data-point");
			} else {
				$hasil = '<div class="alert alert-danger" role="alert">
						  Gagal Menghapus Data.
						</div>';
				header("refresh:1;index.php?p=data-point");
			}
	}

	if (isset($_GET['id_point'])) {
		$point = $_GET['id_point'];
		$del_sql = "DELETE FROM tb_point WHERE id_point='$point'";
		$query_sql = mysqli_query($db, $del_sql);
		if ($query_sql) {
			$hasil = '<div class="alert alert-success" role="alert">
					  Berhasil Menghapus Data.
					</div>';
				header("refresh:1;index.php?p=point-pelanggaran");
		} else {
			$hasil = '<div class="alert alert-danger" role="alert">
					  Gagal Menghapus Data.
					</div>';
			header("refresh:1;index.php?p=point-pelanggaran");
		}

	}
		if (isset($_GET['id_data'])) {
			$data = $_GET['id_data'];
			$del_sql2 = "DELETE FROM tb_konseling WHERE nis='$data' ";
			$query_sql2 = mysqli_query($db, $del_sql2);
			if ( $query_sql2) {
				$hasil = '<div class="alert alert-success" role="alert">
							Berhasil Menghapus Data.
						</div>';
					header("refresh:1;index.php?p=data-point");
			} else {
				$hasil = '<div class="alert alert-danger" role="alert">
							Gagal Menghapus Data.
						</div>';
				header("refresh:1;index.php?p=data-point");
			}
		}
?>