<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "login"; //nome do banco de dados
	
	//Criar a conexao
	$connect = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$connect){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		echo "Conexao realizada com sucesso";
	}	
	
?>