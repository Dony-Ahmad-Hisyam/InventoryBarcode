<?php
include_once('../Connection.php');
$id_B = $_GET['id'];
$stmt = $connection->prepare("DELETE FROM barang WHERE id_barang = ?");
$stmt->bind_param("s", $id_B);
if ($stmt->execute()) {
    echo '<script>alert("Berhasil Di Hapus"); window.location.href="../scan.php";</script>';
} else {
    echo '<script>alert("Gagal");</script>';
}


?>