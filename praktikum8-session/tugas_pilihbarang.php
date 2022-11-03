<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Barang - 205314159</title>
    <style>
    li {
        list-style-type: none;
    }
    </style>
</head>

<body>

    <?php
    $makananMinuman = array("Gula", "Teh", "Kopi", "Susu", "Biskuit");
    $peralatanMandi = array("Sikat Gigi", "Pasta Gigi", "Sabun", "Shampoo", "Sabun Cuci Muka");
    $alatTulis = array("Pensil", "Penggaris", "Penghapus", "Ballpoint", "Kertas HVS");
    ?>

    <div style="margin-left: 20%; margin-right: 20%;">
        <div style="text-align: center;">
            <h1>Pilih Barang</h1>
            <h2>Selamat Datang <?php echo $_SESSION['username'] ?></h2>
            <a href="tugas_signout.php">logout</a>
        </div>

        <form action="tugas_keranjang.php" method="post">

            <h4>Makanan Minuman</h4>
            <?php
            foreach ($makananMinuman as $makmin) {
                echo "<li><input type='checkbox' name='makmin[]' value='$makmin' id=''>$makmin</li>";
            }
            ?>

            <h4>Peralatan Mandi</h4>

            <?php
            foreach ($peralatanMandi as $alatMandi) {
                echo "<li><input type='checkbox' name='mandi[]' value='$alatMandi' id=''>$alatMandi</li>";
            }
            ?>

            <h4>Alat Tulis</h4>

            <?php
            foreach ($alatTulis as $tulis) {
                echo "<li><input type='checkbox' name='tulis[]' value='$tulis' id=''>$tulis</li>";
            }
            ?>

            <br><br>
            <div style="flex: auto;">
                <input type="submit" value="Masuk Keranjang" style="margin-right: 5px;">
                <a href="tugas_isi_keranjang.php">lihat isi keranjang</a>
            </div>

        </form>
        </div.>
</body>

</html>