<?php  

require_once("koneksi.php");

if(isset($_POST['submit'])){
	$id_barang = $_POST['id_barang'];
	$nama_barang = $_POST['nama_barang'];
	$stok = $_POST['stok'];
	$harga_jual = $_POST['harga_jual'];

	$sql_insert = "INSERT INTO produk VALUES ('$id_barang', '$nama_barang', '$stok', '$harga_jual')";

	mysqli_query($kon, $sql_insert);

	header("Location: data-produk.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<div class="badan-utama">
	<header>
	<h1><center>Tambah Data</center></h1>
	</header><br><br>
	<center>
	<div style="color:white;">
	<form action="tambah_data.php" method="POST">
	<center>
		<table border="1">
			<center>
			<tr>
				<td width="25%">Id Barang</td>
				<td width="10%">:</td>
				<td>
					<input type="Id" name="id_barang">
				</td>
			</tr>
			<tr>
				<td width="25%">Nama Barang</td>
				<td width="10%">:</td>
				<td>
					<input type="text" name="nama_barang">
				</td>
			</tr>
			<tr>
				<td width="50%">Stok</td>
				<td width="10%">:</td>
				<td>
					<input type="number" name="stok">
				</td>
			</tr>
			<tr>
				<td width="25%">Harga Jual</td>
				<td width="10%">:</td>
				<td>
					<input type="text" name="harga_jual">
				</td>
			</tr>
			</center>
		</table>
	</center>
		<br><br>
		</div>
		<center><button name="submit" type="submit" class="tombol tombol-lengkap">Tambah Data</button></center>
	</form>
	<br><br>
	 <table>
            <center>
                <a href="https://web.facebook.com/ipul.brandal.39/"><img src="Fb.PNG" width="50px;"></a>
                <a href="https://www.youtube.com/feed/my_videos"><img src="Yt.png" width="50px;"></a>
                <a href="https://www.instagram.com/m.s_ipul10/"><img src="ig.png" width="50px;"></a>
                </center>
            </table>
        <footer>
            @Copyright 2021 || M.S
        </footer>
	</div>
	</center>

</body>
</html>