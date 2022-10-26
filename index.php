<?php
    require_once "conn.php";
    $result = mysqli_query($connect, "SELECT * FROM produk");
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Halaman Utama</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    </head>

    <body>
        <h1 class="text-head">Tabel Produk</h1>
        <a href="add.php" role="button"><span class="text-tambah">&nbsp;&nbsp;Tambah Data</span></a>
        <div style="width: 60%; margin:auto;" >
            <table class="table table-hover text-center table-bordered">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Keterangan</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php
                    while($data_produk = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>".$data_produk['nama_produk']."</td>";
                        echo "<td>".$data_produk['keterangan']."</td>";
                        echo "<td>".$data_produk['harga']."</td>";
                        echo "<td>".$data_produk['jumlah']."</td>";    
                        echo "<td><a href='edit.php?id=$data_produk[id]'>Edit</a> <a href='delete.php?id=$data_produk[id]'>Delete</a></td></tr>";}
                ?>
            </table>
        </div>
    </body>
</html>