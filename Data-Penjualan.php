<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="tampilan.css">
    <title>Data Penjualan</title>
</head>
<body>
<div class="badan-utama" style="color:white;">
    <header>
    <center><h1>Data Pelanggan</h1></center>
    </header><br><br>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <div class="form-group">
        <label for="sel1">Cari :</label>
        <?php
        $kata_kunci="";
        if (isset($_POST['kata_kunci'])) {
            $kata_kunci=$_POST['kata_kunci'];
        }
        ?>
        <input type="text" name="kata_kunci" value="<?php echo $kata_kunci;?>" required/>
        <input type="submit" value="Search">
    </div>
    <div class="form-group">
    </div>
    </form>

    <table border="1">
        <br>
        <thead>
        <tr>
            <th>N0</th>
            <th>Id Barang</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Id Pelanggan</th>
            <th>Nama Lengkap</th>
            <th>No.KTP</th>
            <th>Telpon</th>
            <th>Alamat</th>
            <th>Jumlah Beli</th>
            <th>Total</th>
            <th>Tanggal Beli</th>
            <th>Hapus</th>

        </tr>
        </thead>
        <?php

        include "koneksi.php";
        if (isset($_POST['kata_kunci'])) {
            $kata_kunci=trim($_POST['kata_kunci']);
            $sql="select * from tb_pelanggan where id_pelanggan like '%".$kata_kunci."%' or nama_lengkap like '%".$kata_kunci."%' or no_ktp like '%".$kata_kunci."%' order by id_pelanggan asc";

        }else {
            $sql="select * from tb_pelanggan  order by id_pelanggan asc";
        }


        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["id_barang"];   ?></td>
                <td><?php echo $data["nama_barang"];   ?></td>
                <td><?php echo $data["harga_jual"];   ?></td>
                <td><?php echo $data["id_pelanggan"];   ?></td>
                <td><?php echo $data["nama_lengkap"];   ?></td>
                <td><?php echo $data["no_ktp"];   ?></td>
                <td><?php echo $data["telpon"];   ?></td>
                <td><?php echo $data["alamat"];   ?></td>
                <td><?php echo $data["jumlah_beli"];   ?></td>
                <td><?php echo $data["total"];   ?></td>
                <td><?php echo $data["tanggal_beli"];   ?></td>
                <td>
                <a class="tombol tombol-pesan" href="delete.php?id_pelanggan=<?php echo $data['id_pelanggan'];?>">Delete</a>
            </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
    <footer>
        @Copyright 2021 || M.S
    </footer>
</div>
</body>
</html>