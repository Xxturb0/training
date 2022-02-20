<?php
include('koneksi.php');
if(isset($_GET['id_barang'])) 
{
    $query = mysqli_query($kon,"select * from produk where id_barang ='".$_GET['id_barang']."'");
    $row = mysqli_fetch_array($query);
    // header("Content-type: " . $row["tipe_gambar"]);
    // echo $row["gambar"];
}
else
{
    header('location:Jenis-Sepeda.php');
}
?>