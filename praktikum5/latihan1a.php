<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>205314159 - Latihan 1A</title>
</head>

<body>

  <form action="latihan1b.php" method="POST">

    <table>
      <tbody>
        <tr>
          <td>
            <label for="nim">NIM</label>
          </td>
          <td>
            :
            <input type="text" name="nim">
          </td>
        </tr>

        <tr>
          <td>
            <label for="Nama">Nama</label>
          </td>
          <td>
            :
            <input type="text" name="nama">
          </td>
        </tr>

        <tr>
          <td>
            <label for="status">Status Kelulusan</label>
          </td>
          <td>
            :
            <input type="text" list="combos" id="combo" name="comboboxdemo" value="Memuaskan" name="combo" />
            <datalist id="combos">
              <option>Tidak Memuaskan</option>
              <option>Cukup Memuaskan</option>
              <option>Memuaskan</option>
          </td>
          </datalist>
        </tr>
        <tr>
          <td>
          </td>
          <td>
            <input type="submit" value="Submit Data">
          </td>
        </tr>
      </tbody>
    </table>
  </form>

  <?php

  ?>

</body>

</html>