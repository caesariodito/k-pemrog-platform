<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>205314159 - Keranjang</title>
    <style>
    * {
        text-align: center;
    }
    </style>
</head>

<body>

    <?php
    $makmin = isset($_POST['makmin']) ? $_POST['makmin'] : [];
    $mandi = isset($_POST['mandi']) ? $_POST['mandi'] : [];
    $tulis = isset($_POST['tulis']) ? $_POST['tulis'] : [];
    $_SESSION['keranjang'] = array_merge($makmin, $mandi, $tulis);
    ?>

    <h1>Barang sudah dimasukkan ke dalam keranjang</h1>
    <div style="flex: auto;">
        <a href="tugas_pilihbarang.php">[Pilih Barang]</a>
        <a href="tugas_isi_keranjang.php">[Lihat Keranjang]</a>
    </div>
</body>

</html>