<?php
include_once("./Connection.php");

$id_B = $_GET['id'];
$data = mysqli_query($connection, "SELECT * FROM barang WHERE id_barang='$id_B'");
$hasil = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="icon.png">
    <title>Inventory</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('./bg4.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .container {
            text-align: start;
            margin-top: 25px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .create-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin: 10px;
        }

        .create-button:hover {
            background-color: lightgreen;
        }

        .search-box {
            text-align: start;
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            width: 95%;
            max-width: 400px;
            margin: 10px;
            border-radius: 5px;
        }

        label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
            margin-top: 5px;
        }

        button.bg-success {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        button.bg-success:hover {
            background-color: #218838;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div>
            <a href="./Index.php" class="create-button">Home</a>
            <a href="./Tambah.php" class="create-button">Tambah</a>
        </div>
        <h3 class="mt-5 text-white">Changes Everything Can Be Scanned :D</h3>
        <form action="./fungsi/edit.php" method="POST" enctype="multipart/form-data">
            <div class="search-box">
                <div>
                    <label for="nama_barang">Nama Barang:</label>
                    <input type="text" value="<?= $hasil['Nama']; ?>" class="form-control" name="Nama" placeholder="Masukkan Nama Barang" required>
                </div>
            </div>
            <!-- Tambahkan input hidden untuk mengirimkan ID barang -->
            <input type="hidden" name="id_barang" value="<?= $id_B; ?>">
            <div class="search-box">
                <div>
                    <label for="harga_barang">Harga Barang:</label>
                    <input type="number" value="<?= $hasil['harga']; ?>" class="form-control" name="harga" placeholder="Masukkan Harga Barang" required>
                </div>
            </div>
            <button type="submit" class="bg-success">Save</button>
        </form>
        <div class="fixed-bottom text-center mt-5 text-white">&copy; <?php echo date('Y'); ?> Copyright:
            <a href="https://github.com/Dony-Ahmad-Hisyam"> SamTole Projects</a>
        </div>
    </div>
</body>
</html>
