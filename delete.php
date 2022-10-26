<?php
    require_once("conn.php");
 
    // Mengambil id
    $id = $_GET['id'];
 
    // Menghapus baris sesuai dengan id yang diambil
    $result = mysqli_query($connect, "DELETE FROM produk WHERE id=$id");
 
    // Redirect ke halaman utama
    header("Location:index.php");
?>