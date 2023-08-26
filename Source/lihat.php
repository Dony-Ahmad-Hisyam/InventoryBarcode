<?php
include_once("./Connection.php");
$data = mysqli_query($connection,"SELECT * FROM  barang ORDER BY id_barang DESC");

?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="icon.png">
    <title>Inventory</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background: url('./bg5.jpg') no-repeat center center fixed;
        background-size: cover;
      }

      .container {
        text-align: start;
        margin-top: 25px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: auto;
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

      ul {
        background-color: #eee;
        cursor: pointer;
        width: 95%;
      }

      li {
        padding: 12px;
        border: thin solid #f0f8ff;
      }

      li:hover {
        background-color: white;
      }

      .search-box {
        text-align: center;
        background-color: rgba(255, 255, 255, 0.7);
        padding: 20px;
        border-radius: 10px;
        width: 100%;
        margin-top: 5%;
        color: black;
        max-width: 700px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div>        
        <a href="./Index.php" class="create-button">Back</a>
      </div>
      <div class="search-box text-black mb-5">
      <label for="search"><h3>
      Semua Produk
      </h3></label>
     
      <div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Id Barang</th>
        <th scope="col">Nama</th>
        <th scope="col">Harga</th>
      </tr>
    </thead>
    <tbody>
      <?php $no=1; foreach($data as $item): ?>
        <tr>
          <th scope="row"><?=$no++;?></th>
          <td><?=$item['id_barang']?></td>
          <td><?=$item['Nama']?></td>
          <td>Rp <?=number_format($item['harga'], 0, ',', '.')?></td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>

    </div>
    <div class="fixed-bottom text-center mt-5 text-white">© <?php echo date('Y'); ?> Copyright:
      <a href="https://github.com/Dony-Ahmad-Hisyam"> SamTole Projects</a>
    </div>
  </body>
</html>
