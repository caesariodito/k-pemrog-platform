<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rerata Array</title>
</head>

<body>
    <pre>
    <?php
    $angka = [3, 2, 5, 3, 7];

    echo "Rata rata ", (array_sum($angka) / count($angka));
    ?>
    </pre>
</body>

</html>