<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "platformdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection success";

// $sql = "INSERT INTO mahasiswa (nim, nama)
// VALUES ('205314162', 'Gimank')";

$sql = "INSERT INTO mahasiswa (nim, nama)
VALUES ('205314163', 'Gomank');";
$sql .= "INSERT INTO mahasiswa (nim, nama)
VALUES ('205314164', 'Gamunk');";
$sql .= "INSERT INTO mahasiswa (nim, nama)
VALUES ('205314165', 'Uyeah');";

echo "<br>";

// if (mysqli_query($conn, $sql)) {
if (mysqli_multi_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// $conn->close();
mysqli_close($conn);