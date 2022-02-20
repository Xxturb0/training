<?php

require_once("koneksi.php");

$id_barang = $_GET['id_barang'];


$sql_delete = "DELETE FROM dt_produk WHERE id_barang = '$id_barang'";
mysqli_query($kon, $sql_delete);

header("Location: data-produk.php");

 ?>