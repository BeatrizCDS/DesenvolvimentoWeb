<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <title>Login</title>
    </head>
    <body>
    <div class="container-index">
            <div class="menu-navbar" id="menu-inicio">
                <nav class="navbar navbar-expand-lg navbar-dark "style="background-color: #141513;">
                    <a class="navbar-brand"><img class="imgNav" src="img/SolSfSsss.png"></a>

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
           <div id="container2">
                <div class="box2">
                   
                <div class="form2">
                        <h1 id="text3">Login</h1>
                        <form id="form" name="login" method="post" action="valida-login.php">
                            <input name="txtlogin" type="text" class="form-control" placeholder="Email" required>
                            <br>
                            <input name="txtsenha" type="password" class="form-control" placeholder="Senha" required>
                            <br>
                            <input type='radio' name='perfil' value='1' checked>Administrador
                            <input type='radio' name='perfil' value='2'>Cliente
                            <br><br>
                            <center>
                                <button type="submit" class="btn btn-dark">Logar</button>
                            </center>
                            <br><hr>
                            <div id="trem1">
                                <br>
                                Não possui conta?
                            </div>
                            <div id="trem2">
                                <a href="cadastro.php"> Registre-se</a>
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