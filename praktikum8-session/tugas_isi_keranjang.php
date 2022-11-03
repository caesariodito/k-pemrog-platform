<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>205314159 - Isi Keranjang</title>
</head>

<body>
    <div style="text-align: center;">
        <h1>Isi Keranjang</h1>
        <a href="tugas_signout.php">logout</a>
    </div>

    <h3>Barang yang sudah anda pilih</h3>
    <ol>
        <?php
        $arr = $_SESSION['keranjang'];
        foreach ($arr as $i) {
            echo "<li>$i</li>";
        }
        ?>
    </ol>

    <a href="tugas_pilihbarang.php">kembali Pilih Barang</a>
</body>

</html>