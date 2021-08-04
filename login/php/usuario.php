<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Biblioteca Online</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
    <link rel="manifest" href="../img/site.webmanifest">
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- jquery -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src='https://kit.fontawesome.com/' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <header>
        <nav>

            <ul>
                <img src="../img/android-chrome-192x192.png" width="60" height="55" />
                <li class="logo">Biblioteca Online</li>
                <li align="center"><i class='far fa-user-circle' style='font-size:250%; color:#ffffff'> </i>
                    <a href="http://localhost/ppweb/projeto/biblioteca/login/views/home.html#">
                        <h6>sair</h6>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <br>
    <main>
        <div class="geral-container">
            <div class="container" align="center" style="width: 85%; height: 100%">
                <h2 align="center" style="color: rgb(182, 149, 122);"> <strong> USÚARIO</strong></h2>
                <div class="d-flex bg-light" style="width: 80%; height: 100%;">
                    <div class="p-3 border" style="background-color: #e1e1e1; ">
                        <div class="container" style=" margin-top:50%; align-items :center;">

                            <div class="btn-group1">

                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-list "> Consultar <br> Saldo </i>
                                </button>

                                <div class="dropdown-menu">

                                    <div class="dropdown-item" href="#">
                                        <center><strong>Insira o CPF:</strong> </center>
                                    </div>

                                    <form action="/consult_balance.php" class="was-validated">
                                        <div class="form-group" style="width: 100%; height: 150%; padding: 20px;">

                                            <center>
                                                <input type="text" class="form-control" id="" placeholder="123.456.789-00" name="" required>
                                                <div class="valid-feedback">Agradeço!.</div>
                                                <div class="invalid-feedback">Por favor, preencha este campo.</div>
                                        </div>
                                        </center>

                                        <center>
                                            <button type="reset" class="btn btn-danger">Cancelar</button>
                                            <button type="submit" class="btn btn-success">Buscar</button>
                                        </center>

                                    </form>

                                </div>

                            </div>

                            <!---- receber devolução -->
                            <div class="p-2">
                                <div class="btn-group2">
                                    <div class="btn-group" align="center" style=" width:100%; height:100%;">

                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                            <i class="fas fa-history"> Histórico</i>
                                        </button>

                                        <div class="dropdown-menu">
                                            <form action="/cadastro_usuario.php" class="was-validated">

                                                <div class="form-group " style="width: 100%; height: 180%; padding: 20px;">
                                                    <textarea name="historico" id="historico" cols="35" rows="4">Empréstimo relaizado dia: 21/03/2020. Livro HTML5 e CSS3: Domine a web do futuro
                                                </textarea>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- realizar empréstimo -->
                            <div class="p-2">
                                <div class="btn-group3">
                                    <div class="btn-group" align="center" style=" width:100%; height:100%;">

                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                            <i class="fas fa-shopping-basket"> Realizar <br> Empréstimo </i>
                                        </button>

                                        <div class="dropdown-menu">
                                            <form action="/consult_balance.php" class="was-validated">

                                                <div class="form-group" style="width: 100%; height: 150%; padding: 20px;">
                                                    <label for=""><strong> Nome do Livro :</strong></label>
                                                    <input type="text" class="form-control" id="" placeholder="" name="" required>
                                                    <div class="invalid-feedback">Por favor, preencha este campo.</div>

                                                    <label for=""><strong>Editora :</strong></label>
                                                    <input type="text" class="form-control" id="" placeholder="" name="" required>
                                                    <div class="invalid-feedback">Por favor, preencha este campo.</div>

                                                    <label for=""><strong> Autor :</strong></label>
                                                    <input type="text" class="form-control" id="" placeholder="" name="" required>
                                                    <div class="invalid-feedback">Por favor, preencha este campo.</div>

                                                    <label for=""><strong> Ano :</strong></label>
                                                    <input type="date" class="form-control" id="" placeholder="" name="" required>
                                                    <div class="invalid-feedback">Por favor, preencha este campo.</div>
                                                </div>

                                                <center>
                                                    <div class="form-group form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" name="remember" required>confirme.
                                                            <div class="valid-feedback">Valido.</div>
                                                            <div class="invalid-feedback">Marque esta caixa de seleção para
                                                                continuar.</div>
                                                        </label>
                                                    </div>

                                                    <button type="reset" class="btn btn-danger">Limpar</button>
                                                    <button type="submit" class="btn btn-success">Avançar </button>
                                                </center>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>

                    <div class="border"><img src="../img/usuario.png" alt="usuario" width="100%" height="100%">
                    </div>

                </div>
                &nbsp;
                &nbsp;
            </div>
            &nbsp;
            &nbsp;
        </div>
    </main>
    &nbsp;
    &nbsp;
    <footer class="bg-light text-center text-lg-start ;">
        <!-- Copyright -->
        <div class="footer-copyright text-center p-4" style="background-color: rgb(248, 169, 104);">
            Biblioteca Online ©
            <?php
            echo date("Y");
            ?>
        </div>
    </footer>

    <script>
        $(document).ready(function() {
            $('.btn').click(function() {
                $('ul a').toggleClass("hide");
            });
        });
    </script>

</body>

</html>