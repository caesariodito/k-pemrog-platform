<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>205314159 - Sign in</title>
    <style>
    * {
        text-align: center;
    }
    </style>
</head>

<body>

    <?php
    $defUsername = "dito";
    $defPassword = "dito123";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username != $defUsername or $password != $defPassword) {
        echo "<h1>Maaf, username atau password anda salah";
        echo "<a href='tugas_login.php'>coba kembali</a>";
    } else {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("Location: tugas_pilihbarang.php");
    }
    ?>
</body>

</html>