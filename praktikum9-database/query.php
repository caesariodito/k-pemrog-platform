<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "platform_inventaris";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$kode = $_POST['kodeBarang'];
$nama = $_POST['namaBarang'];
$jenis = $_POST['jenis'] == 1 ? "Makanan" : "Non Makanan";
$lokasi = $_POST['lokasi'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlahStok'];

$action = strtolower($_POST['button']);

switch ($action) {
    case 'simpan':
        $sql = "INSERT INTO stok_barang (kode, nama, jenis, lokasi, harga, jumlah)
                VALUES ('$kode', '$nama', '$jenis', '$lokasi', $harga, $jumlah)";
        break;

    case 'update':
        $sql = "UPDATE stok_barang SET nama='$nama', jenis='$jenis', 
        lokasi='$lokasi', harga=$harga, jumlah=$jumlah WHERE kode='$kode'";
        break;

    case 'hapus':
        $sql = "DELETE FROM stok_barang WHERE kode='$kode'";
        break;

    default:
        // impossible
        break;
}

if (mysqli_query($conn, $sql)) {
    // if (mysqli_multi_query($conn, $sql)) {
    // die("New record created successfully");
} else {
    die("Error: " . $sql . "<br>" . $conn->error);
}

// $conn->close();
mysqli_close($conn);

header("Location: daftar_stock.php");