<?php
session_start(); //bank connection
$db = mysqli_connect("localhost", "root", "", "authentication"); //create authentication in bank/phpMyAdmin

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register_Page</title>
</head>

<body>
    <div class="header">
        <h2>Registro do Usuario</h2>
    </div>
    <form method="post" action="register_page.php"">
        <table>
            <tr>
                <td>Usuario:</td>
                <td>
                    <input type=" text" name="User" class="textInput">
        </td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>
                <input type="email" name="email" class="textInput">
            </td>
        </tr>
        <tr>
            <td>Senha:</td>
            <td>
                <input type="password" name="password" class="textInput">
            </td>
        </tr>
        <tr>
            <td>Senha Novamente:</td>
            <td>
                <input type="password" name="password2" class="textInput">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="register_btn" value="Register">
            </td>
        </tr>
        </table>
    </form>
</body>

</html>