<!-- latihan 1 -->
<!-- masukkan sebuah ke dalam variabel nama -->
<!-- tampilkan isi variabel tersebut ke halaman web -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>teori-6</title>
</head>

<body>
  <?php

  // latihan 1
  $nama = 'Paulus Caesario Dito Putra Hartono';
  echo "<h1>$nama</h1>";

  // latihan 2
  $array = [3, 2, 5, 3, 7];
  // $sum = 0;
  // foreach ($array as $i => $nilai) {
  //   $sums += $nilai;
  // }

  $average = array_sum($array) / count($array);

  echo $average;

  ?>
</body>

</html>