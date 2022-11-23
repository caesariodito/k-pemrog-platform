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

// foreach ($_POST as $key => $value) {
// 	echo "$key - $value";
// 	echo "<br>";
// }

$id = $_POST['id'];
$kode = $_POST['kodeMatkul'];
$matakuliah = isset($_POST['namaMatkul']) ? $_POST['namaMatkul'] : "";
$kelas = isset($_POST['kelas']) ? $_POST['kelas'] . (isset($_POST['praktikum']) ? "P" : "") : "";
$pengampu = isset($_POST['pengampu']) ? $_POST['pengampu'] : "";
$hari = isset($_POST['hari']) ? $_POST['hari'] : "";
$jamStart = isset($_POST['jamStart']) ? $_POST['jamStart'] : "";
$jamEnd = isset($_POST['jamEnd']) ? $_POST['jamEnd'] : "";
$jam = $jamStart . " - " . $jamEnd;

$button = strtolower($_POST["button"]);

if ($button == "simpan") {
	$sql = "INSERT INTO jadwal (kode, matakuliah, kelas, pengampu, hari, jam)
	VALUES ('$kode', '$matakuliah', '$kelas', '$pengampu', '$hari', '$jam')";
} else {
	$sql = "UPDATE jadwal SET matakuliah='$matakuliah', kelas='$kelas', pengampu='$pengampu', hari='$hari', jam='$jam' WHERE id=$id";
}

if (mysqli_query($conn, $sql)) {
} else {
	die("Error: " . $sql . "<br>" . $conn->error);
}

// $conn->close();
mysqli_close($conn);
header("Location: lihat_jadwal.php");