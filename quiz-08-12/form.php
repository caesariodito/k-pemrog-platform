<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>205314159 - Form Pemesanan Barang</title>
	<style>
	th,
	td {
		padding: 5px 10px 5px 5px;
	}
	</style>
</head>

<body>
	<h1>Form Pemesanan Barang</h1>
	<form action="konfirmasi.php" method="post">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>No. HP</td>
				<td><input type="text" name="hp"></td>
			</tr>
			<tr>
				<td style="vertical-align: top;">Cara Pembayaran</td>
				<td>
					<input type="radio" name="bayar" value="Via Transfer BCA">Via Transfer BCA
					<br>
					<input type="radio" name="bayar" value="Via Transfer Mandiri">Via Transfer Mandiri
					<br>
					<input type="radio" name="bayar" value="Via Transfer BNI">Via Transfer BNI
					<br>
					<input type="radio" name="bayar" value="COD">COD
				</td>
			</tr>
		</table>

		<p>Barang yang akan dibeli (jumlah harus diisi)</p>

		<table border="1" style="margin-top: 10px;margin-bottom: 10px;border: 1px solid black;border-collapse: collapse;">
			<thead style="background-color: lightblue;">
				<tr>
					<th></th>
					<th>Nama Barang</th>
					<th>Jumlah</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="checkbox" name="barang[]" value="Sony TV LED 20&quot;"></td>
					<td>Sony TV LED 20&quot;</td>
					<td><input type="text" name="jumBarang[]"></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="barang[]" value="Creative Speaker"></td>
					<td>Creative Speaker</td>
					<td><input type="text" name="jumBarang[]"></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="barang[]" value="LG DVD Player"></td>
					<td>LG DVD Player</td>
					<td><input type="text" name="jumBarang[]"></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="barang[]" value="Samsusng Air Conditioner"></td>
					<td>Samsusng Air Conditioner</td>
					<td><input type="text" name="jumBarang[]"></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="barang[]" value="Toshiba Mini Proyektor"></td>
					<td>Toshiba Mini Proyektor</td>
					<td><input type="text" name="jumBarang[]"></td>
				</tr>
			</tbody>
		</table>
		<input type="submit" value="Pesan">
	</form>


</body>

</html>