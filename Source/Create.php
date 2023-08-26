<?php
include_once('./Connection.php');

// Ambil data dari form menggunakan metode POST
$id = $_POST['id_barang'];
$Nama = $_POST['Nama'];
$harga = $_POST['harga'];

// Gunakan parameterized query untuk mencegah SQL injection
$query = "INSERT INTO barang (id_barang, Nama, harga) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($connection, $query);
mysqli_stmt_bind_param($stmt, 'sss', $id, $Nama, $harga);
$result = mysqli_stmt_execute($stmt);

if ($result) {
    // Tampilkan popup berhasil dengan JavaScript dan redirect setelahnya
    echo '<script>alert("Berhasil"); window.location.href="../Source/Tambah.php";</script>';
} else {
    // Tampilkan pesan gagal dengan JavaScript
    echo '<script>alert("Gagal");</script>';
}

// Tutup statement dan koneksi database
mysqli_stmt_close($stmt);
mysqli_close($connection);
?>
