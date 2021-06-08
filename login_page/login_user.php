<?php

$usuario = $_POST['user'];
$senha = $_POST['pass'];

$usuario = stringslashes($usuario);
$senha = stringslashes($senha);
$usuario = mysql_real_escape_string($usuario);
$senha = mysql_real_escape_string($senha);


if ($row['user'] == $usuario && $row['pass'] == $senha){
    echo "Login Successful !" .$row['user'];
}else{
    echo "Error in Login ! ";
}

?>