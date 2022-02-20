 <?php

require_once("koneksi.php");

 if (isset($_POST['submit'])) {
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $no_ktp = $_POST['no_ktp'];
    $telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];
    $jumlah_beli = $_POST['jumlah_beli'];
    $total = $_POST['total'];
    $tanggal_beli = $_POST['tanggal_beli'];

    $sql_insert = "INSERT INTO tb_pelanggan VALUES('$id_barang','$nama_barang','$harga','$id_pelanggan','$nama_lengkap','$no_ktp','$telpon','$alamat','$jumlah_beli','$total','$tanggal_beli')";
    mysqli_query($kon, $sql_insert);

    header("Location: pesan.php");

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=divice-width", initial-sca]>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesan</title>
    <link rel="stylesheet" type="text/css" href="tampilan.css">
    <script src="assets/js/jquery.js"></script>
</head>
<body>
    <div class="badan-utama">
    <header>
            <h2>Toko Sepeda Jaya</h2>
            <p>Toko Sepeda Terpercaya</p>
        </header>

         <nav class="navigasi">
            <ul>
                <li><a href="login.php">Admin</a></li>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="Jenis-Sepeda.php">Jenis Sepeda</a></li>
                <li><a href="Jenis-Sepeda.php">Pesan</a></li>
            </ul>
        </nav>
         <div class="menu-kiri">
            <div class="kotak">
                <h3>Alamat Toko</h3>
                <img src="Logo.png">
                <p>Jl.Bawal No.3 Yogyakarta</p>
            </div>
            <div class="kotak">
                <h3>Pemesanan</h3>
                <p> Isi Form Pemesanan Dengan Click Tombol Dibawah Ini</p>
                <a class="tombol tombol-pesan" href="Jenis-Sepeda.php">Pesan</a>
            </div>
        </div>
            <div class="menu-tengah">
                <div class="kotak">
  <form action="pesan.php" method="POST">  
    <label for="id_barang"><b>Id Barang</b></label> <br>
    <input style="
    width: 90%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border-radius: 10px;
    background: #f1f1f1;" type="Id" name="id_barang" onkeyup="isi_otomatis()" id="id_barang"><br>
    <label for="nama_barang"><b>Nama Barang</b></label> <br>
    <input style="
    width: 90%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border-radius: 10px;
    background: #f1f1f1;" type="text" name="nama_barang" id="nama_barang">
    <br>
    <label for="harga"><b>Harga</b></label>
    <input style="
    width: 90%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border-radius: 10px;
    background: #f1f1f1;" type="number" name="harga" id="harga_jual"> <br>
    <label for="id_pelanggan"><b>Id Pelanggan</b></label> <br>
    <input style="
    width: 90%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border-radius: 10px;
    background: #f1f1f1;" type="Id" placeholder="Masukan Id Anda" name="id_pelanggan" id="id_pelanggan" required> <br>  

    <label for="nama_lengkap"><b>Nama Lengkap</b></label> <br>
    <input style="
    width: 90%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border-radius: 10px;
    background: #f1f1f1;" type="text" placeholder="Masukan Nama anda" name="nama_lengkap" id="nama_lengkap" required><br>


    <label for="no_ktp"> <b>No.KTP</b> </label> <br>
    <input type="number" name="no_ktp" style="
    width: 90%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border-radius: 10px;
    background: #f1f1f1;" type="number" placeholder="Masukan No.KTP" id="no_ktp" required><br>

    <label for="telpon"><b>Telpon</b></label><br>
    <input type="number" name="telpon" style=" width: 90%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border-radius: 10px;
    background: #f1f1f1" type="number" placeholder="Masukan No.Telpon" id="telpon" required>
    <br>

    <label for="alamat"><b>Alamat</b></label><br>
   <input type="text" name="alamat" style=" width: 90%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border-radius: 10px;
    background: #f1f1f1" type="text" placeholder="Masukan Alamat" id="alamat" required><br>

    <label for="jumlah_beli"><b>Jumlah Beli</b></label>
    <input style="
    width: 90%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border-radius: 10px;
    background: #f1f1f1;" type="text" placeholder="Jumlah Kembalian" name="jumlah_beli" id="jumlah_beli" required><br>

    <label for="total"><b>Total</b></label>
    <input style="
    width: 90%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border-radius: 10px;
    background: #f1f1f1;" type="text" placeholder="Total" name="total" id="total" required><br>

    <label for="tanggal_beli"><b>Tanggal Beli</b></label>
    <input style="
    width: 90%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border-radius: 10px;
    background: #f1f1f1;" type="date" placeholder="Tanggal Beli" name="tanggal_beli" id="tanggal_beli" required>


    <button name="submit" type="submit" class="tombol tombol-pesan">Pesan</button><button name="Reset" type="Reset" class="tombol tombol-lengkap" type="Reset" onclick="closeform()">Reset</button>
    
  </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript">
            function isi_otomatis(){
                var id_barang = $("#id_barang").val();
                $.ajax({
                    url: 'ajax.php',
                    data:"id_barang="+id_barang ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#nama_barang').val(obj.nama_barang);
                    $('#harga_jual').val(obj.harga_jual);
                });
            }
            $("#harga_jual").keyup(function(){   
           var a = parseFloat($("#harga_jual").val());
           var b = parseFloat($("#jumlah_beli").val());
           var c = a*b;
           $("#total").val(c);
         });
         
         $("#jumlah_beli").keyup(function(){
           var a = parseFloat($("#harga_jual").val());
           var b = parseFloat($("#jumlah_beli").val());
           var c = a*b;
           $("#total").val(c);
         });
        </script>
</div>
     </div> 
     <div class="menu-kanan">
        <div class="kotak">
                <h3>Jadwal Buka</h3>
                <img src="Logo.png" alt="Sepeda">
 
                <h4 align="center">Jadwal Buka</h4>
                <center>
                    <p>Senin-Minggu 08.00 WIB - 17.30 WIB</p>
                </center>
            </div>
            <div class="kotak">
                <h3>Berita Terbaru</h3>
 
                <nav class="menu-artikel">
                    <ul>
                        <li><a href="Jenis-Sepeda.php"></a></li>
                    </ul>
                </nav>
            </div>
        </div>
            <footer>
            @Copyright 2021 || M.S
        </footer>
     </div>
    </div>
    </div>

</body>
</html>