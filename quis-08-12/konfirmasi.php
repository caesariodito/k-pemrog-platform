<?php
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$hp = $_POST['hp'];
	$caraBayar = $_POST['bayar'];
	$barang = $_POST['barang'];
	$tempJumBarang = $_POST['jumBarang'];

	$jumBarang = array();
	foreach ($tempJumBarang as $jum){
		if ($jum == ""){continue; } else {
			array_push($jumBarang, $jum);
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>205314159 - Konfirmasi</title>
	<style>
	th,
	td {
		padding: 5px 10px 5px 5px;
	}
	</style>
</head>

<body>
	<h1>Konfirmasi Pemesanan Barang</h1>
	<table>
		<tr>
			<td>Nama</td>
			<td><?php echo $nama ?></td>
		</tr>
		<tr>
			<td>Alamat Email</td>
			<td><?php echo $email ?></td>
		</tr>
		<tr>
			<td>No. HP</td>
			<td><?php echo $hp ?></td>
		</tr>
		<tr>
			<td>Cara Pembayaran</td>
			<td><?php echo $caraBayar ?></td>
		</tr>
	</table>

	<p>Barang yang akan dibeli</p>
	<table border="1" style="margin-top: 10px;margin-bottom: 10px;border: 1px solid black;border-collapse: collapse;">
		<thead style="background-color: lightblue;">
			<tr>
				<th></th>
				<th>Nama Barang</th>
				<th>Jumlah</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$i = 0;
				foreach ($barang as $b){
					echo "<tr>";
					echo "<td>". $i+1 . "</td>";
					echo "<td>$b</td>";
					echo "<td>$jumBarang[$i]</td>";
					echo "<tr>";
					$i++;
				}
			?>
		</tbody>
	</table>

	<a href="form.php">Kembali ke form</a>

</body>

</html>