<?php 
  require_once("config.php");
  session_start();
  if(isset($_POST['reset'])){

      $hp = $_POST['hp'];

      $sql = "SELECT * FROM tb_users WHERE no_hp='$hp' ";
      $result = mysqli_query($db, $sql);
      if(mysqli_num_rows($result)==0){
         $_SESSION['pesan'] = '<div class="alert alert-danger" style="text-align: center">Nomor Handphone anda tidak terdaftar !!!</div>';
         header("location: reset-password.php");
         die();
      } else {
        $row = mysqli_fetch_assoc($result);
        $user = $row['jabatan'];
        $_SESSION['reset'] = $row['no_hp'];

        if ($user =="Admin") {
          header("Location: reset.php");
          die();
        } else {
				echo "Anda bukan user!";
        }
      
      }
  } else if(isset($_POST['reset_pass'])){
    $pass = $_POST['password_baru'];
    $conf = $_POST['password_conf'];
    $hp = $_POST['hp'];

    if ($pass == $conf) {
      $sql = "UPDATE tb_users SET password = '$pass' WHERE no_hp = '$hp' ";
      $result = mysqli_query($db, $sql);

      if ($result) {
        $_SESSION['pesan'] = '<div class="alert alert-success" style="text-align: center">Password Anda telah diubah</div>';
        header('location: index.php');
        die();
      } else {
        echo 'error data';
      }
      
    } else {
      $_SESSION['pesan'] = '<div class="alert alert-danger" style="text-align: center">Password Anda Tidak Sama !!!</div>';
      header('location: reset.php');
      die();
    }
    
  }
?>
