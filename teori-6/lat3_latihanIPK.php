<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIM</title>
</head>

<body>
    <?php
    $input = $_POST["ipk"];
    function outputIpK($ipk)
    {
        if ($ipk < 2.75) {
            return "Tidak Mendapatkan Predikat";
        } elseif ((2.75 <= $ipk) && ($ipk <= 3.00)) {
            return "Memuaskan";
        } elseif ((3.00 <= $ipk) && ($ipk <= 3.50)) {
            return "Sangat Memuaskan";
        } else {
            return "Dengan Pujian";
        }
    }
    echo "Nama Anda     : ", $_POST['name'];

    echo "<br>Predikat Anda :", outputIpK($input);
    ?>
    <table>
        <tr>
            <td>IPK ANDA</td>
            <td>:</td>
            <td> <?php
                    echo $input
                    ?></td>
        </tr>
        <tr></tr>
    </table>

</body>

</html>