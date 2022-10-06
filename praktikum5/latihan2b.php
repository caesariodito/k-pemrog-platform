<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>205314159 - Latihan 2B</title>
</head>

<body>
  <h1>FORM BIODATA - REVIEW</h1>

  <table border="2">
    <tr>
      <td>Nama</td>
      <td><?php echo $_POST['nama'] ?></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><?php echo $_POST['alamat'] ?></td>
    </tr>
    <tr>
      <td>Umur</td>
      <td><?php echo $_POST['umur'] ?></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td><?php echo $_POST['jenisK'] ?></td>
    </tr>
    <tr>
      <td>Hobby</td>
      <td>
        <?php
        $hobbies = $_POST['hobi'];
        $last = end($hobbies);
        foreach ($hobbies as $hobi) {
          echo "$hobi";
          if ($hobi != $last) {
            echo ", ";
          }
        }
        ?></td>
    </tr>
  </table>

</body>

</html>