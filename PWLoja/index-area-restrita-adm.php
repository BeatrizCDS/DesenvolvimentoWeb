<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <title>Adm/Sol</title>
        <?php require_once 'global.php' ?>
        <?php
            try {
                $produto = new Produto();
                $listaProduto = $produto->listar();
                
            } catch(Exception $e) {
                echo '<pre>';
                    print_r($e);
                echo '</pre>';
                echo $e->getMessage();
            }
        ?>
        <?php
            try {
                $cliente = new Cliente();
                $lista = $cliente->listar();
            } catch(Exception $e) {
                echo '<pre>';
                    print_r($e);
                echo '</pre>';
                echo $e->getMessage();
            }
        ?>
    </head>
    <body>
        <?php
            include_once("valida-sentinela-adm.php");
        ?>
        
            <div class="menu-navbar" id="menu-inicio-adm">
                <nav id="mensagem" class="navbar navbar-expand-lg navbar-dark "style="background-color: #141513;color:white;">
                    <strong>
                        Bem vindo administrador!
                    </strong>
                    <ul class="nav justify-content-center">
                    <li class="nav-item">
                      <a class="nav-link" href="#section1">Produtos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#section2">Clientes</a>
                    </li>
                        <a class="nav-link" href="logout.php">Sair</a>
                    </li>
                  </ul>
                </nav>
            </div>        
        <div id="container-adm">
            <div id="box-adm">
                <div id="section1">
                    <br><br><br><br>
                        <h1 id="textCadastro"><h1>Cadastrar produtos</h1>
                    <br><br><br>

                <form  name='cadastro-produto' enctype="multipart/form-data" action='cadastrar-produto.php' method='post'>
                        <div class="form-row">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Descrição" name='txtdesc' >
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Valor" name='txtvalor'>
                            </div>  
                        </div>
                        <br><br>
                        <div class="form-row">
                             <div class="col">
                            <input type="text" class="form-control" placeholder="Quantidade em estoque" name='txtqtde'>
                            </div>
                             <div class="col">
                            <input type="file" class="form-control" name='foto' accept="image/*">
                            </div>
                        </div>
                        <br><br>
                        <button type="submit" id="input" class="btn btn-outline-dark">Cadastrar</button>
                    </form>
                    <br><br>
                    <center>
                        <h2>Lista de produtos cadastrados</h2>
                    </center>
                    <table class="table" >
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col" class="text_table">Código</th>
                            <th scope="col" class="text_table">Foto</th>
                            <th scope="col" class="text_table">Descrição</th>
                            <th scope="col" class="text_table">Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($listaProduto as $linha){
                                    
                                    echo   '<tr>';
                                    echo "<th>".$linha['idproduto']."</th>";
                                   
                                    echo "<td><img src='".$linha['fotoproduto']."' width='100' heigth='100'></td>";
                                    echo "<td>".$linha['descproduto']."</td>";
                                echo "<td>".$linha['valorproduto']."</td>";
                                    echo   '</tr>';
                        
                                }
                            ?>
                        </tbody>
                        </table>                  
                                </div>
                                <div id="section2">
                                    <div class="section-div">
                                    <br><br><br><br>
                                        <h1 id="textCadastro">Lista de Clientes Cadastrados</h1>
                                    <br><br>
                                    <table class="table" >
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col" class="text_table">Código</th>
                            <th scope="col" class="text_table">Nome</th>
                            <th scope="col" class="text_table">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($lista as $linha){
                                    echo   '<tr>';
                                    echo "<th>".$linha['idcliente']."</th>";
                                    echo "<td>".$linha['nomecliente']."</td>";
                                    echo "<td>".$linha['emailcliente']."</td>";
                                    echo   '</tr>';
                        
                                }
                            ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>  