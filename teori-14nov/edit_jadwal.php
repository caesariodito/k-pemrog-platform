<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>205314159 - Edit Jadwal</title>
</head>

<body>

	<h1>Edit Jadwal Kuliah</h1>

	<br> <br>
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

	$id = $_POST['id'];
	$button = $_POST['button'];

	if ($button == 'edit') {
		$sql = "SELECT kode, matakuliah, kelas, pengampu, hari, jam FROM jadwal WHERE id='$id'";
		$result = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($result)) {
	?>

	<form action="query.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id ?>">
		<input type="hidden" name="kodeMatkul" value="<?php echo $row["kode"] ?>">
		<table>
			<tr>
				<td>Kode Matakuliah</td>
				<td><input type="text" name="" disabled value="<?php echo $row["kode"] ?>"></td>
			</tr>
			<tr>
				<td>Nama Matakuliah</td>
				<td><input type="text" name="namaMatkul" value="<?php echo $row["matakuliah"] ?>"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>
					<select name="kelas">
						<option value="<?php echo $row["kelas"][0] ?>"><?php echo $row["kelas"][0] ?></option>
						<?php
								for ($i = 'A'; $i != 'AA'; $i++) {
									echo "<option value='$i'>$i</option>";
								}

								$checked = 0;

								if ($row["kelas"][1] == "P") {
									$checked = 1;
								}

								?>
						<input type="checkbox" name="praktikum" <?php if ($checked == 1) echo 'checked' ?> <label
							for="praktikum">Praktikum?</label>
					</select>
				</td>
			</tr>
			<tr>
				<td>Pengampu</td>
				<td><input type="text" name="pengampu" value="<?php echo $row["pengampu"] ?>"></td>
			</tr>
			<tr>
				<td>Hari</td>
				<td>
					<select name="hari">
						<option value='<?php echo $row["hari"] ?>' selected><?php echo $row["hari"] ?></option>
						<option value="Senin">Senin</option>
						<option value="Selasa">Selasa</option>
						<option value="Rabu">Rabu</option>
						<option value="Kamis">Kamis</option>
						<option value="Jumat">Jumat</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jam Mulai - Jam Berakhir</td>
				<td>

					<?php
							$jam = $row["jam"];
							$jam = explode(" - ", $jam);
							$jamStart = $jam[0];
							$jamEnd = $jam[1];
							?>

					<input type="text" name="jamStart" value="<?php echo $jamStart ?>">
					<input type="text" name="jamEnd" value="<?php echo $jamEnd ?>">
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<input type="submit" name="button" value="Update">
					<a href="lihat_jadwal.php">
						<input type="button" name="cancel" value="Cancel">
					</a>
				</td>
			</tr>
		</table>
	</form>

	<?php
		} //while tag
	} else {
		// delete
		$sql = "DELETE FROM jadwal WHERE id=$id";
		$result = mysqli_query($conn, $sql);
		header("Location: lihat_jadwal.php");
	}

	$_POST = array();

	mysqli_close($conn);

	?>

</body>

</html>