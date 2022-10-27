<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>205314159-Cookie</title>
</head>

<body>

    <?php
    if (!isset($_COOKIE['noInduk'])) {
    ?>
    <h1>PENDAFTARAN PESERTA SEMINAR</h1>
    <br>
    <form action="cookie_tugas_berhasil.php" method="POST">
        <table>
            <tr>
                <td>No Induk</td>
                <td><input type="text" name="noInduk"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <input type="radio" name="status" value="Dosen">Dosen
                    <br>
                    <input type="radio" name="status" value="Mahasiswa">Mahasiswa
                </td>
            </tr>
            <tr>
                <td>Minat</td>
                <td>
                    <input type="checkbox" name="minat[]" value="Programming">Programming
                    <br>
                    <input type="checkbox" name="minat[]" value="Database">Database
                    <br>
                    <input type="checkbox" name="minat[]" value="Networking">Networking
                    <br>
                    <input type="checkbox" name="minat[]" value="Multimedia">Multimedia
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Daftar"></td>
            </tr>
        </table>
    </form>
    <?php
    } else {
    ?>
    <h1>ANDA SUDAH TERDAFTAR SEBAGAI PESERTA SEMINAR</h1>
    <table border="1">
        <tr>
            <td>No Induk</td>
            <td><?php echo $_COOKIE['noInduk'] ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $_COOKIE['nama'] ?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td><?php echo $_COOKIE['status'] ?></td>
        </tr>
        <tr>
            <td>Minat</td>
            <td><?php echo $_COOKIE['minat'] ?></td>
        </tr>
    </table>
    <?php
    }
    ?>


</body>

</html>