



<!DOCTYPE html>
<html lang="pt-br">

<head>

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
    <div class="geral-container" style=" padding: 10px;">
        <nav>
            
            <ul>
                <img src="../img/android-chrome-192x192.png" width="60" height="55" />
                <li class="logo">Biblioteca Online</li>
                <li align="center"  ><i class='far fa-user-circle' style='font-size:200%; color:rgb(1, 148, 1)'> </i>
                <a href=""></a>
                <!--  <a
                        href="http://localhost/ppweb/projeto/biblioteca/login/php/login.php"> 
                        <h6>admin</h6>
                    </a>-->
                </li>
            </ul>
        </nav><br>
        <div class="container" align="center" style="width: 85%; height: 100%">

            <h2 align="center" style="color: rgb(248, 169, 104)" ;> <strong> Painel</strong></h2>

            <div class="d-flex bg-light" style="width: 80%; height: 100%;">

                <div class="p-3 border" style="background-color: #e1e1e1; ">

                    <div class="container">

                        <div class="btn-group1">

                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-list "> Consultar Saldo </i>
                            </button>

                            <div class="dropdown-menu">

                                <div class="dropdown-item" href="#">
                                    <center><strong>Insira o CPF do aluno:</strong> </center>
                                </div>

                                <form action="/consult_balance.php" class="was-validated">

                                    <div class="form-group" style="width: 100%; height: 150%; padding: 20px;">

                                        <!-- <label for="pwd"><strong> CPF:</strong></label> -->

                                        <center>
                                            <input type="text" class="form-control" id="" placeholder="123.456.789-00"
                                                name="" required>
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

                        <div class="p-2">

                            <div class="btn-group2">

                                <div class="btn-group" align="center">

                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                        data-toggle="dropdown">
                                        <i class="fa fa-book"> Cadastrar Livro </i>
                                    </button>

                                    <div class="dropdown-menu">

                                        <form action="/consult_balance.php" class="was-validated">

                                            <div class="form-group" style="width: 100%; height: 150%; padding: 20px;">
                                                <label for=""><strong> Nome do Livro :</strong></label>
                                                <input type="text" class="form-control" id="" placeholder="" name=""
                                                    required>
                                                <div class="invalid-feedback">Por favor, preencha este campo.</div>

                                                <label for=""><strong>Editora :</strong></label>
                                                <input type="text" class="form-control" id="" placeholder="" name=""
                                                    required>
                                                <div class="invalid-feedback">Por favor, preencha este campo.</div>

                                                <label for=""><strong> Autor :</strong></label>
                                                <input type="text" class="form-control" id="" placeholder="" name=""
                                                    required>
                                                <div class="invalid-feedback">Por favor, preencha este campo.</div>

                                                <label for=""><strong> Ano :</strong></label>
                                                <input type="date" class="form-control" id="" placeholder="" name=""
                                                    required>
                                                <div class="invalid-feedback">Por favor, preencha este campo.</div>

                                                <label for=""><strong> Quantidade :</strong></label>
                                                <input type="number" class="form-control" id="" placeholder="" name=""
                                                    required>
                                                <div class="invalid-feedback">Por favor, preencha este campo.</div>
                                            </div>

                                            <center>

                                                <div class="form-group form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="remember"
                                                            required>confirme.
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

                        <!-- mensagem de alerta (livro cadastrado com sucesso!) -->

                        <div class="p-2">
                            <div class="btn-group3">
                                <div class="btn-group" align="center">

                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                        data-toggle="dropdown">
                                        <i class="fa fa-user-plus"> Cadastrar Usúario</i>
                                    </button>

                                    <div class="dropdown-menu">
                                        <form action="/cadastro_usuario.php" class="was-validated">

                                            <div class="form-group " style="width: 100%; height: 150%; padding: 20px;">
                                                <label for=""><strong> Nome :</strong></label>
                                                <input type="text" class="form-control" id="" placeholder="Nome"
                                                    name="nome" required>
                                                <div class="invalid-feedback">Por favor, preencha este campo.</div>

                                                <label for=""><strong>Endereço :</strong></label>
                                                <input type="text" class="form-control" id=""
                                                    placeholder="Bairro ,Rua ,N°" name="endereco" required>
                                                <div class="invalid-feedback">Por favor, preencha este campo.</div>

                                                <label for=""><strong> telefone :</strong></label>
                                                <input type="telefone" class="form-control" id=""
                                                    placeholder="1234-5678" name="telefone" required>


                                                <label for=""><strong> Celular :</strong></label>
                                                <input type="text" class="form-control" id=""
                                                    placeholder="(00) 1 2345-6789" name="celular" required>
                                                <div class="invalid-feedback">Por favor, preencha este campo.</div>

                                                <label for=""><strong> E-Mail: </strong></label>
                                                <input type="email" class="form-control" id=""
                                                    placeholder="Nome@email.com.br" name="email" required>
                                                <div class="invalid-feedback">Por favor, preencha este campo.</div>

                                                <label for=""><strong> Profissão :</strong></label>
                                                <input type="text" class="form-control" id=""
                                                    placeholder="estudante/trabalhador" name="profissao" required>


                                                <label for=""><strong> Data de Nascimento :</strong></label>
                                                <input type="date" class="form-control" id="" name="nascimento"
                                                    required>
                                            </div>

                                            <center>
                                                <button type="reset" class="btn btn-danger">Limpar</button>
                                                <button type="submit" class="btn btn-success">Avançar </button>
                                            </center>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- mensagem de alerta (Usuario cadastrado com sucesso!) -->


                        <!-- continuar ..... -->

                    </div>
                </div>

                <div class="border"><img src="../img/bibliotecario.jpeg" alt="bibliotecario" width="100%" height="100%">
                </div>

            </div>
            <br>
        </div>

        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgb(248, 169, 104);">
                Biblioteca Online ©
                <?php
                echo date("Y");
                ?>
            </div>
        </footer>

    </div>

    <script>
        $(document).ready(function () {
            $('.btn').click(function () {
                $('ul a').toggleClass("hide");
            });
        });
    </script>

</body>

</html>