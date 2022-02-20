<?php

require_once("koneksi.php");

$id_barang = $_GET['id_barang'];

$sql_cari = "SELECT * FROM produk WHERE id_barang = '$id_barang'";
$query = mysqli_query($kon, $sql_cari);
$result = mysqli_fetch_assoc($query);

if(isset($_POST['submit'])){
	$id_barang = $_POST['id_barang'];
	$nama_barang = $_POST['nama_barang'];
	$stok = $_POST['stok'];
	$harga_jual = $_POST['harga_jual'];

	$sql_update = "UPDATE produk SET nama_barang = '$nama_barang', stok = '$stok', harga_jual = '$harga_jual' WHERE id_barang = '$id_barang'";

	mysqli_query($kon, $sql_update);

	header("Location: data-produk.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<div class="badan-utama">
	<header>
	<h1><center>Update Data</center></h1>
	</header><br><br>
	<center>
	<div>
	<form action="update-produk.php" method="POST">
		<table border="1" style="color:white;">
			<tr>
				<td width="25%">Id Barang</td>
				<td width="10%">:</td>
				<td>
					<input type="Id" name="id_barang" value="<?= $result['id_barang']; ?>">
				</td>
			</tr>
			<tr>
				<td width="25%">Nama Barang</td>
				<td width="10%">:</td>
				<td>
					<input type="text" name="nama_barang" value="<?= $result['nama_barang']; ?>">
				</td>
			</tr>
			<tr>
				<td width="50%">Stok</td>
				<td width="10%">:</td>
				<td>
					<input type="number" name="stok" value="<?= $result['stok']; ?>">
				</td>
			</tr>
			<tr>
				<td width="25%">Harga Jual</td>
				<td width="10%">:</td>
				<td>
					<input type="text" name="harga_jual" value="<?= $result['harga_jual']; ?>">
				</td>
			</tr>
		</table>
		<br><br>
		</div></center>
		<center><button name="submit" type="submit" class="tombol tombol-lengkap">Update Data</button></center><br><br>
	</form>
	 <table>
            <center>
                <a href="https://web.facebook.com/ipul.brandal.39/"><img src="sosmed/Fb.PNG" width="50px;"></a>
                <a href="https://www.youtube.com/feed/my_videos"><img src="sosmed/Yt.png" width="50px;"></a>
                <a href="https://www.instagram.com/m.s_ipul10/"><img src="ig.png" width="50px;"></a>
                </center>
            </table>
        <footer>
            @Copyright 2021 || M.S
        </footer>
	</div>

</body>
</html>