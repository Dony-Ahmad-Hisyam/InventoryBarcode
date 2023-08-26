<?php
include_once("../Connection.php");
$id = $_POST['id_barang'];
$Nama = $_POST['Nama'];
$harga = $_POST['harga'];

$data = mysqli_query($connection,"UPDATE barang SET Nama='$Nama' , harga='$harga' WHERE id_barang='$id'");

if($data){
    echo '<script>alert("Berhasil Di Updated"); window.location.href="../scan.php";</script>';
}else{
    echo "gagal";
}

?>