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

$kode = $_POST['kodeMatkul'];
$matakuliah = isset($_POST['namaMatkul']) ? $_POST['namaMatkul'] : "";
$kelas = isset($_POST['kelas']) ? $_POST['kelas'] : "";
$pengampu = isset($_POST['pengampu']) ? $_POST['pengampu'] : "";
$hari = isset($_POST['hari']) ? $_POST['hari'] : "";
$jamStart = isset($_POST['jamStart']) ? $_POST['jamStart'] : "";
$jamEnd = isset($_POST['jamEnd']) ? $_POST['jamEnd'] : "";
$jam = $jamStart . " - " . $jamEnd;

$sql = "INSERT INTO jadwal (kode, matakuliah, kelas, pengampu, hari, jam)
		VALUES ('$kode', '$matakuliah', '$kelas', '$pengampu', '$hari', '$jam')";

if (mysqli_query($conn, $sql)) {
	// if (mysqli_multi_query($conn, $sql)) {
	// die("New record created successfully");
} else {
	die("Error: " . $sql . "<br>" . $conn->error);
}

// $conn->close();
mysqli_close($conn);

header("Location: input_jadwal.php");