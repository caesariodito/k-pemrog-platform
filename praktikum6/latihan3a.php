<?php

$arrHobi = $_POST['hobi'];

echo "<h1>DAFTAR HOBI YG KUPILIH</h1>";

echo "<ol>";
foreach ($arrHobi as $arr) {
  echo "<li>$arr</li>";
}
echo "</ol>";

echo "<a href='./latihan3.php'>kembali</a>";
