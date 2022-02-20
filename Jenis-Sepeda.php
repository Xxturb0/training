<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=divice-width",initial-sca]>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Jenis Sepeda</title>
        <link rel="stylesheet" type="text/css" href="tampilan.css">
        <link rel="stylesheet" type="text/css" href="styleslide.css">
    </head>
    <body>
        <header>
            <h2>Toko Sepeda Jaya</h2>
            <p>Toko Sepeda Terpercaya</p>
        </header>
        <nav class="navigasi">
            <ul>
                <li><a href="login.php">Admin</a></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="Jenis-Sepeda.php">Jenis Sepeda</a></li>
                <li><a href="Jenis-Sepeda.php">Pesan</a></li>
            </ul>
        </nav>
        <section>
            <div>
                <div class=slider>
                    <div class=isi-slider>
                        <img src="image/Foto1.jpg">
                        <img src="image/Foto2.jpg">
                        <img src="image/Foto3.jpg">
                        <img src="image/Foto4.jpg">
                    </div>
                </div>
            </div>

        <table width="70%" border="1" cellpadding="4" cellspacing="4" align="center" style="background-color: crimson;">
            <tr>
                <th>ID</th>
                <th>FOTO</th>
                <th>NAMA SEPEDA</th>
                <th>HARGA</th>
                <th>BELI</th>

            </tr>
            <?php
            include ('koneksi.php');
            $sql=mysqli_query($kon,"SELECT * FROM produk");
            while ($data=mysqli_fetch_array($sql)){
            ?>
            <tr>
                <td><?=$data['id_barang']?></td>
                <td><?="<img src='image/".$data['gambar']."'style='width:200px; height:100px;'>"?></td>
                <td><?=$data['nama_barang']?></td>
                <td><?=$data['harga_jual']?></td>
                <td><a href="pesan.php" class="tombol tombol-lengkap" type="submit" name="su">Beli Sekarang</a></td>
            </tr>
            <?php }?>
        </table>
                <center>
                <a href="https://web.facebook.com/ipul.brandal.39/"><img src="sosmed/Fb.png" width="50px;"></a>
                <a href="#"><img src="sosmed/Ig.png" width="50px;"></a>
                <a href="https://www.youtube.com/feed/my_videos"><img src="sosmed/Yt.png" width="50px;"></a>
                </center>
            </table>
        <footer>
            @Copyright 2021 || M.S
        </footer>
    </body>
</html>