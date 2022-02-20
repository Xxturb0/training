<?php 

require_once("koneksi.php");

$sql_get = "SELECT * FROM produk";
$query_jl = mysqli_query($kon, $sql_get);

$results = [];

while ($row = mysqli_fetch_assoc($query_jl)) {
	$results[] = $row;
}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Data Produk</title>
 	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="tampilan.css">
 </head>
 <body>
 	<div class="badan-utama">
 	<header>
 	<center><h1>Data Produk</h1></center>
 	</header>
 	<div><br><br>
 	<center><table border="1">
 		<tr style="color:white;">
 			<td><center>Id Barang</center></td>
 			<td><center>Nama Barang</center></td>
 			<td><center>Stok</center></td>
 			<td><center>Harga Jual</center></td>
            <td><center>Gambar</center></td>
 			<td><center>Update</center></td>
 			<td><center>Hapus</center></td>
 		</tr>
 		</div>

 		<?php
 		foreach($results as $result) :

 		 ?>

 		<tr style="color:white;">
 			<td><?= $result['id_barang'] ?></td>
 			<td><?= $result['nama_barang'] ?></td>
 			<td><?= $result['stok'] ?></td>
 			<td><?= $result['harga_jual'] ?></td>
            <td><?= $result['gambar'] ?></td>
 			<td>
 				<a class="tombol tombol-pesan" href="update-produk.php?id_barang=<?=$result['id_barang'];?>">Update</a>
 			</td>
 			<td>
 				<a class="tombol tombol-lengkap" href="delete_produk.php?id_barang=<?=$result['id_barang'];?>">Delete</a>
 			</td>
 		</tr>
 		<?php
  		endforeach; 
 		 ?>

 	</table><br><br><a class="tombol tombol-pesan" href="tambah_data.php">Tambah Data</a><br><br>
 </center>
 	</div>
 	<table>
            <center>
                <a href="https://web.facebook.com/ipul.brandal.39/"><img src="sosmed/Fb.png" width="50px;"></a>
                <a href="#"><img src="sosmed/Ig.png" width="50px;"></a>
                <a href="https://www.youtube.com/feed/my_videos"><img src="sosmed/Yt.png" width="50px;"></a>
                </center>
            </table>
 	<footer>@Copyright 2020 || M.S</footer>
 </body>
 </html>