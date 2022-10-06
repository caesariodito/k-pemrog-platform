<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>205314159 - Latihan 1B</title>
</head>

<body>
  <h1>STATUS KELULUSAN MAHASISWA</h1>
  <?php
  $p = $_POST;
  echo "Mahasiswa dengan Nama " . $p["nama"] . " NIM " . $p['nim'] . " berhasil menyelesaikan studi S1 dengan predikat " . $p['combo'];
  ?>
</body>

</html>