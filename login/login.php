<?php

$usuario = $_POST['username'];
$senha = $_POST['password'];

// $usuario = stringslashes($usuario);
// $senha = stringslashes($senha);
// $usuario = mysqli_real_escape_string($usuario);
// $senha = mysqli_real_escape_string($senha);

$a = mysqli_connect("localhost", "root", "");
mysqli_select_db($a, "login");

$result = mysqli_query($a, "SELECT * FROM login  WHERE username = '$usuario' and password = '$senha'")
    or die("Falha ao consultar Banco de Dados " . mysqli_error($a));

$row = mysqli_fetch_array($result);

if ($row['username'] == $usuario && $row['password'] == $senha) {
    echo "Login Successful !" . $row['username'];
    header("Location:home.php"); // direct access to home page
} else {
    echo "Error in Login ! ";
}
