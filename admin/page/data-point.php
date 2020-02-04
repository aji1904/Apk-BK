
<?php
  session_start();
  $hasil ="";
  include 'includes/hapus.php';

  echo $hasil;
    echo $hasil_cari;
?>
<div class="card mb-3">
        <div class="card-header">
          <h3><i class="fa fa-users"></i> Data Konseling</h3><br>
		  <a href="page/point-siswa.php" target="_Blank" class="btn btn-info btn-sm" data-toggle="tooltip"><i class="fa fa-print"></i> Cetak Total Point</a>
        </div>
        <div class="card-body" style="overflow-x: auto"> 
          <table id="example1" class="table table-bordered table-responsive-xl table-hover display">
          
            <thead>
              <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Point Pelanggaran</th>
                <?php if ($_SESSION['jabatan'] != "Wakil Kesiswaan") { ?>
                <th><center>Aksi</center></th>
                <?php } ?>
              </tr>
            </thead> 
            <?php
              $sql = "SELECT DISTINCT tb_konseling.nis,tb_siswa.nama, tb_kelas.nama_kelas FROM tb_konseling JOIN tb_siswa ON tb_siswa.nis = tb_konseling.nis JOIN tb_kelas ON tb_kelas.id_kelas = tb_siswa.id_kelas";
              $query = mysqli_query($db, $sql);
              echo mysqli_error($db);
            ?>                         
            <tbody>
              <?php
                $x=0;
                while($ambil_data = mysqli_fetch_array($query)){
                $x++;
              ?>
              <tr>
                <td><center><?php echo $x ?></center></td>
                <td><?php echo $ambil_data['nis'] ?></td>
                <td><?php echo $ambil_data['nama'] ?></td>
                <td><?php echo $ambil_data['nama_kelas'] ?></td>
                <td>
                  <?php
                  $data_id = $ambil_data['nis']; 
                  $sum = "SELECT SUM(tb_point.point_pelanggaran) as jml_point from tb_point JOIN tb_konseling ON tb_point.id_point = tb_konseling.id_point WHERE tb_konseling.nis = '$data_id' ";
                  $query_sum = mysqli_query($db, $sum);
                  $hasil_sum = mysqli_fetch_assoc($query_sum);
                  echo $hasil_sum['jml_point'];
                  ?> POINT
                </td>
                <?php if ($_SESSION['jabatan'] != "Wakil Kesiswaan") { ?>
                <td align="center">
                  <a href="javascript:;" data-id="<?php echo $ambil_data['nis'] ?>" data-toggle="modal" data-target="#hapus-pelanggaran" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
                <?php } ?>
              </tr>
              <?php
                }
              ?>
            </tbody>
          </table>
          
        </div>                            
      </div><!-- end card-->  

            <!-- Modals Hapus Data -->
    <div id="hapus-pelanggaran" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Konfirmasi</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <strong> Data siswa dan data konseling akan terhapus, Apakah Anda yakin ingin menghapus data ini ? <br> </strong>
        </div>
        <div class="modal-footer">
          <a href="javascript:;" class="btn btn-danger" id="hapus-true-data">Hapus</a>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Tidak</button>
        </div>
        </div>
      </div>
    </div>                                
