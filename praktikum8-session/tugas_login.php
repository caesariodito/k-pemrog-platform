<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>205314159 - Login</title>
    <style>
    * {
        text-align: center;
    }

    input {
        text-align: left;
    }
    </style>
</head>

<body>
    <h1>Login</h1>
    <form action="tugas_signin.php" method="post">
        <table align="center">
            <tr>
                <td>
                    <label for="">Username:</label>
                </td>
                <td>
                    <input type="text" name="username">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Password:</label>
                </td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Masuk">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>