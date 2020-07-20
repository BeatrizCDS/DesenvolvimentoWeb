<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <title>Sol</title>
    </head>
    <body>
    <div class="container-index">
            <div class="menu-navbar" id="menu-inicio">
                <nav class="navbar navbar-expand-lg navbar-dark "style="background-color: #141513;">
                    <a class="navbar-brand" href="index.php"><img class="imgNav" src="img/SolSfSsss.png"></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Categorias
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="violao.php">Violões</a>
                                    <a class="dropdown-item" href="violino.php">Violinos</a>
                                    <a class="dropdown-item" href="ukulele.php">Ukuleles</a>
                                    <a class="dropdown-item" href="acessorio.php">Acessórios para Instrumentos</a>
                                </div>
                            </li>
                            <a class="nav-item nav-link" href="contato.php">Fale Conosco</a>
                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
           <div id="tudo">
                <div class="box">
                        <div class="imagem-marota">

                        </div>
                    <div class="form">
                        <h2 id="text1">Fale conosco</h2>
                        <h4 id="text2">Queremos saber sua opinião sobre nossos produtos!</h4>
                        <form id="form">
                            <input name="nome" type="text" class="form-control" placeholder="Nome" required>
                            <br>
                            <input name="email" type="email" class="form-control" placeholder="Email" required>
                            <br>
                            <textarea name="mensagem" class="form-control" placeholder="Mensagem" row="3" required></textarea>
                            <br>
                            <!-- Botão para acionar modal -->
                            <center>
                            <button type="button" id="botton" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
                            Enviar Mensagem
                            </button>
                            </center>
                           <!-- Modal -->
                            <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Obrigado pela sua opinião!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Sua opinião é muito importante para melhorarmos sua experiência em nosso site.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="btn" class="btn btn-secondary" bgcolor="#D2691E" data-dismiss="modal">Ok</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>    
                </div>
           </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>