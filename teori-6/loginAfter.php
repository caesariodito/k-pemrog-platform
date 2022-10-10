<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
    function cekAkun($nama, $pass)
    {
        if (($nama == "admin") && ($pass == "admin123")) {
            return "Selamat Datang Anda berhasil Login";
        } elseif (($nama != "admin")) {
            return "Username yang anda Masukkan tidak dikenali";
        } else {
            return "Password yang dimasukan tidak dikenali";
        }
    }
    $userN = $_POST['name'];
    $userP = $_POST['pass'];
    ?>
    <table>
        <tr>
            <td>
                <?php
                echo cekAkun($userN, $userP)
                ?></td>
        </tr>
        <tr></tr>
    </table>
</body>

</html>