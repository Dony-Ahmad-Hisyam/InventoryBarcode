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
        background: url('./bg1.jpg') no-repeat center center fixed;
        background-size: cover;
      }

      .container {
        text-align: start;
        margin-top: 25px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }

           /* Stil tombol pada layar besar */
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

/* Stil tombol pada layar kecil (misalnya, perangkat seluler) */
@media (max-width: 767px) {
  .create-button {
    padding: 8px 16px; /* Mengurangi padding untuk layar kecil */
    font-size: 14px;   /* Mengurangi ukuran font untuk layar kecil */
    margin: 5px;
  }
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
        color:#696969;
        max-width: 500px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div>
        <a href="./Tambah.php" class="create-button">Tambah</a>
        <a href="./scan.php" class="create-button">Perbarui</a>
        <a href="./lihat.php" class="create-button">Lihat Semua</a>
    </div>
      <h3 class="mt-5 text-white">Search Everything You Think</h3>
      <div class="search-box">
      <label for="search">Cari Produk:</label>
        <input type="text" id="readi" class="form-control" name="search" >
        <div id="read-results">
      </div>
    </div>
    <div class="fixed-bottom text-center mt-5 text-white">© <?php echo date('Y'); ?> Copyright:
      <a href="https://github.com/Dony-Ahmad-Hisyam"> SamTole Projects</a>
    </div>
  </body>
</html>
<script>
        $(document).ready(function(){
            $('#readi').keyup(function(){ 
                var query = $(this).val();
                if(query != ''){
                    $.ajax({
                        url:"./fungsi/readOnly.php",
                        method:"POST",
                        data:{query:query},
                        success:function(data){
                            $('#read-results').html(data);
                        }
                    });
                } else {
                    // Kosongkan hasil pencarian jika input kosong
                    $('#read-results').html('');
                }
            });
        });
    </script>
