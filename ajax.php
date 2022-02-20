<?php

$koneksi = mysqli_connect("localhost", "root", "", "prpl");

$id_barang = $_GET['id_barang'];

$query = mysqli_query($koneksi, "select * from produk where id_barang='$id_barang'");
$produk= mysqli_fetch_array($query);
$data = array(
            'nama_barang'      =>  $produk['nama_barang'],
            'harga_jual'      =>  $produk['harga_jual'],);

echo json_encode($data);
?>