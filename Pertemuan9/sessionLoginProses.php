<?php
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['username']);

$sql ="SELECT * FROM user WHERE username = '$username' and password = '$password'";
$result = mysqli_query($connect, $sql);
$cek = mysqli_num_rows($result);

if($cek >0){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    echo "Anda Berhasil Login silahkan Menuju ";
    ?>
<a href="homeSession.php">Halaman Home</a> <?php
}else {
    echo "Gagal Login, Silahkan Login lagi "; ?>
<a href="sessionLoginForm.html">Halaman Home</a><?php
    echo mysqli_error($connect);
}
