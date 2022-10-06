<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>205314159 - Latihan 2A</title>
</head>

<body>

  <table style="border: 1px solid;">
    <form action="latihan2b.php" method="POST">
      <td colspan="3">
        <h1 style="text-align: center;">FORM BIODATA</h1>
      </td>

      <tr>
        <td>
          <label for="nama">Nama</label>
        </td>
        <td>:</td>
        <td>
          <input type="text" name="nama">
        </td>
      </tr>

      <tr>
        <td>
          <label for="alamat">Alamat</label>
        </td>
        <td>:</td>
        <td>
          <input type="text" name="alamat">
        </td>
      </tr>

      <tr>
        <td>
          <label for="umur">Umur</label>
        </td>
        <td>:</td>
        <td>
          <input type="text" name="umur">
        </td>
      </tr>

      <tr>
        <td>
          <label for="jenisK">Jenis Kelamin</label>
        </td>
        <td>:</td>
        <td>
          <input type="radio" name="jenisK" value="Pria">
          <label for="pria">Pria</label>
        </td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>
          <input type="radio" name="jenisK" value="Wanita">
          <label for="wanita">Wanita</label>
        </td>
      </tr>

      </tr>

      <tr>
        <td>
          <label for="hobi">Hobby</label>
        </td>
        <td>:</td>
        <td>
          <input type="checkbox" name="hobi[]" value="Music" />
          <label for="musik">Music</label>
        </td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>
          <input type="checkbox" name="hobi[]" value="Programming" />
          <label for="programming">Programming</label>
        </td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>
          <input type="checkbox" name="hobi[]" value="Game" />
          <label for="game">Game</label>
        </td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>
          <input type="checkbox" name="hobi[]" value="Movies" />
          <label for="movies">Movies</label>
        </td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>
          <input type="checkbox" name="hobi[]" value="Traveling" />
          <label for="traveling">Travelling</label>
        </td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>
          <input type="checkbox" name="hobi[]" value="Sport" />
          <label for="sport">Sport</label>
        </td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>
          <input type="checkbox" name="hobi[]" value="Organization" />
          <label for="organization">Organization</label>
        </td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>
          <input type="checkbox" name="hobi[]" value="Automotive" />
          <label for="automotive">Automotive</label>
        </td>
      </tr>
      <tr>
        <td>
          <input type="submit" value="Submit">
        </td>
      </tr>

    </form>
  </table>


</body>

</html>