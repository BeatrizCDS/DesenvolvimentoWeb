<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <title>
            Sol Instrumentos Musicais
        </title>
    </head>
    <body>
    <?php
            include_once("valida-sentinela-cliente.php");
        ?>
        <div class="container-index">
            <div class="menu-navbar" id="menu-inicio">
                <nav class="navbar navbar-expand-lg navbar-dark "style="background-color: #141513;">
                    <a class="navbar-brand" href="#">
                        <img class="imgNav" src="images/SolSfSsss.png">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link">Bem-Vindo Cliente!</a>
                            </li>
                           
                            <a class="nav-item nav-link" href="contato.php">Fale Conosco</a>
                            <ul class="nav justify-content-end">
                                <li>
                                    <a class="nav-link" href="logout.php">Sair</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="carousel-index">
                <img class="d-block w-100" src="images/1.jpeg">
            </div>
            <div class="h2">
                <h2>Ofertas</h2>
            </div>               
            <div class="group">
            <div class="cards">
                <div class="titulo-card">
                    <h5>Ukulele</h5>
                </div>
                <img class="img-fluid" src="images/ukulele1.png">
                <div class="cont-nav">
                    <p class="card-text">Ukulele Tenor T1k Martin</p>
                    <p class="card-text1"><strong>Valor: </strong>R$ 195,40</p>
                    <a href="#" class="btn btn-outline-success">Add. ao Carrinho</a>
                </div>
            </div>
            <div class="cards">
                <div class="titulo-card">
                    <h5>Violão</h5>
                </div>
                <img class="img-fluid" src="images/violao2.png">
                <div class="cont-nav">
                    <p class="card-text">Violão Harmonics GE-30BK Nylon</p>
                    <p class="card-text1"><strong>Valor: </strong>R$ 699,30</p>
                    <a href="#" class="btn btn-outline-success">Add. ao Carrinho</a>
                </div>
            </div>
            <div class="cards">
                <div class="titulo-card">
                    <h5>Violino</h5>
                </div>
                <img class="img-fluid" src="images/violino1.png">
                <div class="cont-nav">
                    <p class="card-text">Violino Classic Series Envernizado</p>
                    <p class="card-text1"><strong>Valor: </strong>R$ 708,90</p>
                    <a href="#" class="btn btn-outline-success">Add. ao Carrinho</a>
                </div>
            </div>
            </div>
        </br>
        </br>
        </br>
        </br>

            <footer id="rodape">
            <!-- Copyright -->
                <div class="footer-copyright text-center py-3" style="color:white;">
                    © 2020 Todos os Direitos Reservados 
                    </br>
                    Sol Instrumentos Musicais
                    </br>
                </div>
            </footer>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>