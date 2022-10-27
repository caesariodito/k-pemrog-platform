<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>205314159-Cookie-Berhasil</title>
</head>

<body>
    <h1>PENDAFTARAN BERHASIL</h1>
    <?php
    setcookie("noInduk", $_POST['noInduk']);
    setcookie("nama", $_POST['nama']);
    setcookie("status", $_POST['status']);
    setcookie("minat", implode(", ", $_POST['minat']));
    ?>
</body>

</html>