<?php
session_start();

unset(
	$_SESSION['id'], //usuarioId
	$_SESSION['nome'], //usuarioNome
	$_SESSION['email'], //usuarioEmail
	$_SESSION['senha'] //usuarioSenha
);

$_SESSION['logindeslogado'] = "Deslogado com sucesso";
//redirecionar o usuario para a página de login
header("Location: login.php");
?>