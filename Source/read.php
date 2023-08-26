<?php
include_once('./Connection.php');

// Ambil kata kunci pencarian
$query = $_POST['query'];

// Sanitize the input (to prevent SQL injection)
$query = mysqli_real_escape_string($connection, $query);

// Query pencarian
$sql = "SELECT * FROM barang WHERE id_barang LIKE '%$query%'";
$result = $connection->query($sql);

if ($result->num_rows > 0) { 
    echo "<div style='text-align: center;  padding-top: 20px;'>";
    echo "<table width='100%' border='1'>";
    echo "<tr>
            <th>No </th>
            <th>Id Barang </th>
            <th>Nama </th>
            <th>Harga </th>
            <th>Action </th>
        </tr>";
        $no = 1;
        while ($row = $result->fetch_assoc()) {
            // Format harga dengan number_format
            $formattedPrice = number_format($row['harga'], 0, ',', '.');
        
            echo <<<HTML
            <tr>
                <td>$no</td>
                <td>{$row['id_barang']}</td>
                <td>{$row['Nama']}</td>
                <td>Rp {$formattedPrice}</td>
                <td>
                    <a href="./edit.php?id={$row['id_barang']}">Edit</a> |
                    <a href="./fungsi/delete.php?id={$row['id_barang']}">Delete</a>
                </td>
            </tr>
            HTML;
            $no++;
        }
        

    echo "</table>";
} else {
    echo "Produk tidak ditemukan";
}

?>
