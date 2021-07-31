<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
	header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert(' Usuário Cadastrado com Sucesso!')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Ops! Algo de Errado Aconteceu.')</script>";
			}
		} else {
			echo "<script>alert('ERRO! Esse Email Já Existi.')</script>";
		}
	} else {
		echo "<script>alert('Senha Não Corresponde.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
	<link rel="apple-touch-icon" sizes="180x180" href="../img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
	<link rel="manifest" href="../img/site.webmanifest">
	<link rel="stylesheet" href="../css/home.css">
	<link rel="stylesheet" href="../css/login.css">
	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<nav>
		<ul>
			<img src="../img/android-chrome-192x192.png" width="60" height="55" />
			<li class="logo">Biblioteca Online</li>
			<li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
		</ul>
	</nav>

	<!-- logo -->
	<div class="row">
		<div class="col-1">
			<div class="form">

				
					<form class="home.php" method="POST" class="login-form">
						<center>
							<h1 class='main-heading'>Cadastro</h1>
						</center>
						<input type="text" placeholder="Nome" name="username" value="<?php echo $username; ?>" required>
						<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
						<input type="password" placeholder="Senha" name="password" value="<?php echo $_POST['password']; ?>" required>
						<input type="password" placeholder="Confirmar Senha" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
						<button name="submit" class="btn">Registre</button>

						&nbsp;&nbsp;

						<h2>
							<p class="message">Já tenho conta? <a href="login.php">Login</a>.</p>
						</h2>

					</form>

			</div>
		</div>
	</div>
	
	&nbsp;

	<footer>
        <!-- Copyright -->
		
        <div class="text-center" style="color: rgb(248, 169, 104);"><strong>Biblioteca Online ©</strong>
            <?php
            echo  date("Y");
            ?>
        </div>
    </footer>

	<script>
		$(document).ready(function() {
			$('.btn').click(function() {
				$('.items').toggleClass("show");
				$('ul li').toggleClass("hide");
			});
		});
	</script>



</body>

</html>