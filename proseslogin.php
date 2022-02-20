<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password']; 
 
 $user = mysqli_query($kon,"select * from tb_admin where username='$username' and password='$password'");
$chek = mysqli_num_rows($user);
if($chek>0)
{
    header("location:Data-Penjualan.php");
}else
{
    echo "Koneksi gagal";
    header("location:login.php");
}
?>