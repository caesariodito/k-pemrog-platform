<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>205314159 - Lihat Jadwal</title>

	<style>
	li {
		padding: 3px;
	}
	</style>
</head>

<body>

	<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "platform_jadwal_kuliah";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connection success <br>";
    ?>

	<h1>Lihat Jadwal</h1>

	<?php
    if (!isset($_GET['filterHari'])) {
        $_GET['filterHari'] = "Semua";
    }
    $filterHari = $_GET['filterHari'];
    ?>

	<form action="lihat_jadwal.php" method="get">
		<label for="jadwalHari">Lihat Jadwal Hari: </label>
		<select name="filterHari">
			<option value="none" selected disabled hidden>Pilih Hari</option>
			<option value="Semua">Semua</option>
			<option value="Senin">Senin</option>
			<option value="Selasa">Selasa</option>
			<option value="Rabu">Rabu</option>
			<option value="Kamis">Kamis</option>
			<option value="Jumat">Jumat</option>
		</select>
		<input type="submit" value=">">
	</form>

	<div class="jadwal">
		<?php

        if ($filterHari != 'Semua') {
            $arrayHari = [$filterHari];
        } else {
            $arrayHari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        }

        foreach ($arrayHari as $hari) {
            $sql = "SELECT id, kode, matakuliah, kelas, pengampu, jam FROM jadwal WHERE hari='$hari'";

            $result = mysqli_query($conn, $sql);

            echo "<h2>$hari</h2>";
            echo "<ol>";
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<form action='edit_jadwal.php' method='post'>";
                    echo "<li>" . $row["kode"] . " : " . $row["matakuliah"] . " : " . $row["kelas"] . " : " . $row["pengampu"] . " : "
                        . $row["jam"] . "<input type='hidden' name='id' value='" . $row["id"] . "'> <button type='submit' value='edit' name='button'>Edit</button> <button type='submit' value='delete' name='button'>Delete</button>" . "</li>";
                    echo "</form>";
                }
            } else {
                echo "<p>Tidak ada</p>";
            }
            echo "</ol>";
        }

        mysqli_close($conn);
        ?>

	</div>

	<br>
	<a href="input_jadwal.php">| Input Jadwal Kuliah |</a>

</body>

</html>