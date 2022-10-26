<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Tambah Data</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <a href="index.php"><span class="btn btn-warning hBack" style="margin-left:20px; margin-top:20px;">Back</span></a>
        <br></br>
        <div style="width: 60%; margin:auto;">
            <form name="add_produk" method="post" action="add.php">
                <table class="table table-hover text-justify">
                    <tr>
                        <td>Nama Produk</td>
                        <td><input size=60 type="text" name="nama_produk"></td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td><input size=60 type="text" name="keterangan"></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td><input size=60 type="text" name="harga"></td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td><input size=60 type="text" name="jumlah"></td>
                    </tr>
                </table>
                <center><input type="submit" name="submit" value="Tambahkan Data" class="btn btn-outline-warning"></center>
            </form>
        </div>
    </body>
</html>

<?php
    
    if(isset($_POST['submit'])){
       
        $nama_produk = ($_POST['nama_produk']);
        $keterangan = ($_POST['keterangan']);
        $harga = ($_POST['harga']);
        $jumlah = ($_POST['jumlah']);
        include_once("conn.php");
        

        $result = mysqli_query($connect, "INSERT INTO produk(nama_produk,keterangan,harga,jumlah) VALUES('$nama_produk','$keterangan',$harga, $jumlah)");
        echo "User added successfully. <a href='index.php'>View Users</a>";
        header("Location:index.php");

    }
?>