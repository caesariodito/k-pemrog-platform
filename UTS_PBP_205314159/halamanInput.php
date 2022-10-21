<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>205314159-halamanInput</title>
</head>

<body>
  <h1>Pesan Makanan dan Minuman</h1>
  <form action='halamanTampil.php' method='POST'>

    <table border=0>
      <tr>
        <td>Nama Pemesan</td>
        <td style="padding=10px;"><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Makanan</td>
        <?php
        $daftarMakanan = [
          "Nasi Goreng",
          "Mie Goreng",
          "Mie Godog",
        ];
        
        $firstMak = $daftarMakanan[0];
        
        foreach ($daftarMakanan as $dmak) {
          if ($dmak == $firstMak){
            echo "<td>";
            echo "<input name='makanan[]' value='$dmak' type='checkbox'/>$dmak";
            echo "</td>";
          } else {
            echo "<tr>";
            echo "<td>";
            echo "</td>";
            echo "<td>";
            echo "<input name='makanan[]' value='$dmak' type='checkbox'/>$dmak";
            echo "</td>";
          }
        }
        ?>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td>Minuman</td>
        <?php
          $daftarMinuman = [
            "Es Teh Manis",
            "Es Jeruk",
            "Teh Panas",
            "Jeruk Panas"
          ];

          $firstMin = $daftarMinuman[0];

          foreach ($daftarMinuman as $dmin) {
            if ($dmin == $firstMin){
              echo "<td>";
              echo "<input name='makanan[]' value='$dmin' type='checkbox'/>$dmin";
              echo "</td>";
            } else {
              echo "<tr>";
              echo "<td>";
              echo "</td>";
              echo "<td>";
              echo "<input name='minuman[]' value='$dmin' type='checkbox'/>$dmin";
              echo "</td>";
            }
          }
        ?>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="submit" value="Simpan">
        </td>
      </tr>
    </table>

  </form>

</body>

</html>