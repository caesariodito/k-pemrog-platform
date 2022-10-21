<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>205314159-halamanTampil</title>
    <style>
        * {
            font-weight: bold;
        }

        ol {
            list-style-position: inside;
            padding-left: 0;
        }
    </style>
</head>

<body>
    <h1>Tampilkan Pesanan</h1>


    <div class="container" style="padding-left: 10px;">

        <?php

            $arrMakanan = $_POST['makanan'];
            $arrMinuman = $_POST['minuman'];
            $nama = $_POST['nama'];

            echo "$nama memesan";

            echo "<p>Makanan</p>";
            echo "<ol>";
            foreach ($arrMakanan as $arr) {
                echo "<li>$arr</li>";
            }
            echo "</ol>";

            echo "<p>Minuman</p>";
            echo "<ol>";
            foreach ($arrMinuman as $arr) {
                echo "<li>$arr</li>";
            }
            echo "</ol>";

            echo "<a href='./halamanInput.php'>kembali</a>";
            ?>
    </div>
</body>

</html>