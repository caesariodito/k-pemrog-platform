<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>205314159 - Input Stock</title>

    <style>
    td {
        padding: 5px;
    }
    </style>
</head>

<body>
    <h1>INPUT STOK GUDANG TOKO KELONTONG BAHAGIA</h1>
    <a href="daftar_stock.php">| Lihat Daftar Stok |</a>

    <br> <br>

    <form id="form1" action="query.php" method="POST">
        <table>
            <tr>
                <td>Kode Barang</td>
                <td><input type="text" name="kodeBarang"></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="namaBarang"></td>
            </tr>
            <tr>
                <td>Jenis</td>
                <td>
                    <input type="radio" name="jenis" value="1"> Makanan
                    <br>
                    <input type="radio" name="jenis" value="0"> Non Makanan
                </td>
            </tr>
            <tr>
                <td>Lokasi</td>
                <td>
                    <select name="lokasi">
                        <option value="RakA">Rak A</option>
                        <option value="RakB">Rak B</option>
                        <option value="RakC">Rak C</option>
                        <option value="RakD">Rak D</option>
                        <option value="RakE">Rak E</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Harga satuan</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Jumlah Stok</td>
                <td><input type="text" name="jumlahStok"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" name="button" value="Simpan">
                    <input type="submit" name="button" value="Update">
                    <input type="submit" name="button" value="Hapus">
                </td>
            </tr>
        </table>
    </form>

</body>

</html>