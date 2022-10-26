<?php
    require_once("conn.php");

    if(isset($_POST['update'])){
        $id = ($_POST['id']);

        $nama_produk = ($_POST['nama_produk']);
        $keterangan = ($_POST['keterangan']);
        $harga = ($_POST['harga']);
        $jumlah = ($_POST['jumlah']);

        $result = mysqli_query($connect, "UPDATE produk SET nama_produk='$nama_produk', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' WHERE id='$id'");

        header("Location:index.php");
    }
?>

<?php
    $id = $_GET['id'];
 
    $result = mysqli_query($connect, "SELECT * FROM produk WHERE id=$id");
     
    while($produk = mysqli_fetch_array($result))
    {
        $nama_produk = $produk['nama_produk'];
        $keterangan = $produk['keterangan'];
        $harga = $produk['harga'];
        $jumlah = $produk['jumlah'];
    }
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Ubah Data</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    </head>

    <body>
        <a href="index.php"><span class="btn btn-warning hBack" style="margin-left:20px; margin-top:20px;">Back</span></a>
        <br/><br/>
        <div style="width: 60%; margin:auto;">
            <form name="update_produk" method="post" action="edit.php">
                <table class="table table-hover text-justify">
                    <tr>
                        <td>Nama Produk</td>
                        <td><input size=60 type="text" name="nama_produk" value="<?php echo $nama_produk;?>"></td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td><input size=60 type="text" name="keterangan" value="<?php echo $keterangan;?>"></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td><input size=60 type="text" name="harga" value=<?php echo $harga;?>></td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td><input size=60 type="text" name="jumlah" value=<?php echo $jumlah;?>></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                        <td><input type="submit" name="update" value="Update" class="btn btn-outline-warning"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>