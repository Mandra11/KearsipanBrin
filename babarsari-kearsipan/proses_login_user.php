<?php
include('koneksi.php');

if (isset($_POST['submit_user'])) {
 $email_u = $_POST['email_u'];
$password_u = $_POST['password_u'];

    $sql = "SELECT * FROM users WHERE email='$email_u' AND password='$password_u'";
    $result = mysqli_query($conn, $sql);
 

  $data = mysqli_fetch_assoc($result);
 if($data['role_id']=="2"){
 
    $_SESSION['username'] = $username;
    $_SESSION['role_id'] = "2";
  echo "<script>alert('Berhasil Login sebagai User');window.location='index-user.php';</script>";
 
  } else {
        echo "<script>alert('Email atau password Anda salah. Silakan coba lagi!');history.back();</script>";
    }
}

    elseif (isset($_POST['submit_admin'])) {

$email_a= $_POST['email_a'];
$password_a = $_POST['password_a'];

    $sql = "SELECT * FROM users WHERE email='$email_a' AND password='$password_a'";
    $result = mysqli_query($conn, $sql);


  $data = mysqli_fetch_assoc($result);
 if($data['role_id']=="1"){
 
    $_SESSION['username'] = $username;
    $_SESSION['role_id'] = "1";
  echo "<script>alert('Berhasil Login sebagai Admin');window.location='index-admin.php';</script>";
 
  } else {
        echo "<script>alert('Email atau password Anda salah. Silakan coba lagi!');history.back();</script>";
    }
}
  

?>
 
