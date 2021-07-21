<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="vpageiewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div id="section">
        <div class="img">
            <img src="img/follow.png">
        </div>
        <div id="form">
            <form method="POST" action="home.php">
                <!--process.php -->
                <div class="h2">
                    <h2>Login</h2>
                </div>
                <p>

                    <input type="text" id="username" name="username" placeholder="Usuário" />
                </p>
                <p>
                    <input type="password" id="password" name="password" placeholder="Senha" />
                </p>
                <p>
                    <button class="button" style="vertical-align:middle" type="submit"><span>acessar</span></button>
                </p>
                <p>
                    <a href="">Ainda não possui conta?
                        <strong>Cadastre-se</strong>
                    </a>
                </p>
            </form>
        </div>

    </div>
</body>

</html>

<?php
$usuario = $_POST['username'];
$senha = $_POST['password'];

$conexao = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexao, "login");

$result = mysqli_query($conexao, "SELECT * FROM login  WHERE username = '$usuario' and password = '$senha'")
    or die("Falha ao consultar Banco de Dados " . mysqli_connect_error());

$row = mysqli_fetch_array($result);

if ($row['username'] == $usuario && $row['password'] == $senha) {
    echo "Login Successful !" . $row['username'];
    header("Location:home.php"); // direct access to home page
} else {
    // $_SESSION['loginErro'] = "usuario ou senha invalido !" Error in Login !;
    echo "usuario ou senha invalido ! ";
}
?>