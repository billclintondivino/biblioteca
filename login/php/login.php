<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: home.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: home.php");
    } else {
        echo "<script>alert('Oops! Email de Usuário ou Senha Incorreta.')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>login</title>

    <link rel="manifest" href="../img/site.webmanifest">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/login.css">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
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
    <!--LOGO--->
    <div class="row">
        <div class="col">
            <div class="form">

                <div class="form">
                    <form class='login-form' method="POST" action="http://127.0.0.1:5500/login/bibliotecario.html">
                        <center>
                            <h1 class='main-heading'>Login</h1>
                        </center>
                        <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                        <input type="password" placeholder="Senha" name="password" value="<?php echo $_POST['password']; ?>" required>
                        <button name="submit" class="btn">Login</button>
                        <p class="message"> Não tenho cadastro? <a href="register.php">Cadastrar</a>.</p>
                    </form>
                </div>
            </div>
        </div>

    </div>



    <script>
        $(document).ready(function() {
            $('.btn').click(function() {
                $('.items').toggleClass("show");
                $('ul li').toggleClass("hide");
            });
        });
    </script>
    <footer>
        <!-- Copyright -->
        <div class="text-center" style=" size:100px ;color: rgb(248, 169, 104);"><strong>Biblioteca Online ©</strong>
            <?php
            echo date("Y");
            ?>
        </div>
    </footer>

</body>

</html>