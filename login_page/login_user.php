<?php

$usuario = $_POST['user'];
$senha = $_POST['pass'];

$usuario = stringslashes($usuario);
$senha = stringslashes($senha);
$usuario = mysqli_real_escape_string($usuario);
$senha = mysqli_real_escape_string($senha);

mysqli_connect("localhost", "root", "");
mysqli_select_db("login");
}
$result = mysqli_query("SELECT * FROM users WHERE user = '$usuario' and pass = '$senha'") or die("Falha ao consultar Banco de Dados " . mysqli_error());

$row = mysqli_fetch_array($result);

if ($row['user'] == $usuario && $row['pass'] == $senha){
    echo "Login Successful !" .$row['user'];
}else{
    echo "Error in Login ! ";
}

?>