<?php

require_once("koneksi.php");

$id_pelanggan = $_GET['id_pelanggan'];


$sql_delete = "DELETE FROM tb_pelanggan WHERE id_pelanggan = '$id_pelanggan'";
mysqli_query($kon, $sql_delete);

header("Location: Data-Penjualan.php");

 ?>