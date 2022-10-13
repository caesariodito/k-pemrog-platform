<?php

$suhu = [23, 45, 36, 27, 33, 32, 30, 28, 35, 32];

echo "<table border=1>";
$i = 1;
foreach ($suhu as $s) {
  echo "<tr>";
  echo "<td> Hari ke-$i </td>";
  echo "<td>$s</td>";
  echo "</tr>";
  $i++;
}
echo "</table>";
