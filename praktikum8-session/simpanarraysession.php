<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Menyimpan Array ke dalam Session</title>
</head>

<body>
    <?php
    $daftarBuah = array("Apel", "Jeruk", "Semangka", "Jambu", "Mangga", "Durian");

    $_SESSION['listBuah'] = $daftarBuah;
    echo "<h1>Daftar Buah sudah disimpan ke dalam Session</h1>";
    ?>
</body>

</html>