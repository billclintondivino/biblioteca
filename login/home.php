<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../login/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../login/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../login/img/favicon-16x16.png">
    <link rel="manifest" href="../login/img/site.webmanifest">
    <link rel="stylesheet" href="../login/css/home.css">
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="./css/slick.css" />
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }

        /* bloco do livro */
        /* span {
    display: inline-block;
    width: 70px;
    height: 70px;
    margin: 6px;
    background-color: #555; */
    </style>
</head>

<body>
    <nav>
        <ul>
            <img src="./img/android-chrome-192x192.png" width="60" height="55" />
            <li class="logo">Biblioteca Online</li>
            <li class="items"><a href="#">Home</a></li>
            <li class="items"><a href="#">Sobre</a></li>
            <li class="items"><a href="#">Contato</a></li>
            <li class="items"><a href="#">Login</a></li>

            <a class="navbar-brand" href="#">
                <img src="./img/android-chrome-512x512.png" alt="logo" style="width:40px;">
            </a>

            <li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
        </ul>
    </nav>
    <!-- carousel -->
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/center.jpeg" class="mx-auto d-block" alt="biblioteca online" width="690" height="450">
            </div>
            <div class="carousel-item">
                <img src="imagem2.jpg" alt="nome" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="imagem3.jpg" alt="nome" width="1100" height="500">
            </div>
        </div>
        <div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class=" carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    
    <div>
        <!-- onde colocara o  bloco do livro em caixa -->
        <!-- campo do livro /bordas -->
        <span class="rounded"></span>


        <!-- modal dentro do bloco do livro descricao / .modal-dialog-scrollable-->

        <h2>titulo do livro</h2>
        <p>descricao</p>
        <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Open modal
        </button>

        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h1 class="modal-title">Modal Heading</h1>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <h3>Some text to enable scrolling..</h3>
                        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- pagination justify -->
    <div>
        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
        </ul>
    </div>

    <!-- Js -->
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