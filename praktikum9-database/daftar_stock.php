<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>205314159 - Daftar Stock</title>
</head>

<body>

    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "platform_inventaris";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connection success <br>";

    $sql = "SELECT kode, nama, jenis, lokasi, harga, jumlah FROM stok_barang";
    $result = mysqli_query($conn, $sql);

    ?>



    <h1>DAFTAR STOK BARANG <br> TOKO KELONTONG BAHAGIA</h1>

    <table border="1" style>
        <thead>
            <tr>
                <th>No.</th>
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Jenis</th>
                <th>Lokasi</th>
                <th>Harga</th>
                <th>Jumlah Stok</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo
                        "<td>" . $i . "</td>" .
                            "<td>" . $row["kode"] . "</td>" .
                            "<td>" . $row["nama"] . "</td>" .
                            "<td>" . $row["jenis"] . "</td>" .
                            "<td>" . $row["lokasi"] . "</td>" .
                            "<td>Rp. " . number_format($row["harga"]) . "</td>" .
                            "<td>" . $row["jumlah"] . "</td>";
                    }
                } else {
                    echo "<td>0 results</td>";
                }
                // $conn->close();
                mysqli_close($conn);
                ?>
            </tr>
        </tbody>
    </table>

    <br>
    <a href="input_stock.php">kembali</a>

</body>

</html>