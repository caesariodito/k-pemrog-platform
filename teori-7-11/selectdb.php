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
echo "Connection success <br>";

$sql = "SELECT nim, nama FROM mahasiswa";
$result = mysqli_query($conn, $sql);

// var_dump($result);
// echo "$result";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "NIM: " . $row["nim"] . " - NAMA: " . $row["nama"] . "<br>";
    }
} else {
    echo "0 results";
}
// $conn->close();
mysqli_close($conn);