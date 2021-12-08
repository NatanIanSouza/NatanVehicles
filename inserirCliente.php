<?php 

    $local_server = "localhost";
    $usuario_server = "root";
    $senha_server = "";
    $banco = "locadora";

    $conec = mysqli_connect($local_server, $usuario_server, $senha_server, $banco) or die ("Não é possível se conectar");

    $nomeCliente=$_POST['nomeCliente'];
    $userCliente = $_POST['userCliente'];
    $senhaCliente = MD5($_POST['senhaCliente']);
    $alternativaCliente=$_POST['alternativaCliente'];
    $cpfCliente=$_POST['cpfCliente'];
    $ruaCliente=$_POST['ruaCliente'];
    $numeroCliente=$_POST['numeroCliente'];
    $bairroCliente=$_POST['bairroCliente'];
    $cepCliente=$_POST['cepCliente'];
    $cidadeCliente=$_POST['cidadeCliente'];
    $estadoCliente=$_POST['estadoCliente'];
    $telefoneCliente=$_POST['telefoneCliente'];
    $emailCliente=$_POST['emailCliente'];

    $sqlbusc = "SELECT * FROM clientela WHERE userCliente = '$userCliente'";

    $ope = mysqli_query($conec, $sqlbusc) or die ("Não foi possível buscar no banco");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="libs/icons/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Cliente cadastrado</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-menu bg-dark fixed-top">
        <a href="index.html" class="navbar-brand text-white ml-5" id="nome"><img id="logo" src="imagens/Logo_natan_ian_azul.png" width="30" height="30" class="d-inline-block align-top "> Natan Vehicles</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="my-nav" class="collapse navbar-collapse mr-5">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item active">
                    <a class="nav-link bg-link" href="index.html" id="li1"><i class="fas fa-home"></i> Home<span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link bg-link" href="Login" id="li2"><i class="fas fa-clipboard-check"></i> Login<span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link bg-link" href="About" id="li3"><i class="fas fa-mail-bulk"></i> About<span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link bg-link" href="vitrine.php" id="li3"><i class="fas fa-car"></i> Vitrine<span class="sr-only"></span></a>
                </li>
            </ul>
        </div>

    </nav>

    <div class="jumbotron gradient">
        <h1 class="titles mt-5">Cliente Cadastrado</h1>
    </div>

    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-12 col-sm-12 col-md-6  ">
            <div class="row bg-backform">
                <div class="col-12 col-sm-12 col-md-12 mt-4">

                    
                    <?php

                        if ($userCliente == "" || $userCliente = null){
                            echo "O campo nome não pode ser vazio!";
                        }

                        //verifica se já existe um usuário cadastrado no banco
                        else if (mysqli_num_rows($ope)>0){
                            echo "<h3>Usuário já existente!<h3>";
                        }

                        //insere um usuário no banco se não existir um já cadastrado
                        else if (mysqli_num_rows($ope)<=0){
                            $userCliente = $_POST['userCliente'];
                            $sqlinser = "INSERT INTO clientela(nomeCliente, userCliente, senhaCliente, alternativaCliente, cpfCliente, ruaCliente, numeroCliente, bairroCliente, cepCliente, cidadeCliente, estadoCliente, telefoneCliente, emailCliente) VALUES ('$nomeCliente', '$userCliente', '$senhaCliente', '$alternativaCliente', '$cpfCliente', '$ruaCliente', '$numeroCliente', '$bairroCliente', '$cepCliente', '$cidadeCliente', '$estadoCliente', '$telefoneCliente', '$emailCliente')";
                            mysqli_query($conec, $sqlinser) or die ("Não foi possível inserir no banco de dados");
                            echo "<h3>Cliente cadastrado com sucesso!</h3> <br><br>";

                            echo "NOME: $nomeCliente <br><br> USUÁRIO: $userCliente <br><br> SEXO: $alternativaCliente <br><br> CPF: $cpfCliente <br><br> RUA: $ruaCliente <br><br> NÚMERO DA CASA: $numeroCliente <br><br> BAIRRO: $bairroCliente <br><br> CEP: $cepCliente <br><br> CIDADE: $cidadeCliente <br><br> ESTADO: $estadoCliente <br><br> TELEFONE: $telefoneCliente <br><br> E-MAIL: $emailCliente <br><br>";
                        }  

                        

                    ?>

                        <div class="row">
                            <form action="cliente_formulario.html">
                                <div class="row mt-3 mr-1 ml-1 ">
                                    <div class="col-12 col-sm-12 col-md-12 ">
                                        <button class="btn btn-personal ">Voltar</button> 
                                    </div>
                                </div>
                            </form>
                            <form action="cliente_login.html">
                                <div class="row mt-3  ">
                                    <div class="col-12 col-sm-12 col-md-12 ">
                                        <button class="btn btn-personal ">Login</button> 
                                    </div>
                                </div> <br>
                            </form>
                        </div> 
                        
                </div>
            </div>
        </div> 
    </div>

    <div class="modal fade" id="modal-info" role="dialog" aria-labelledby="information" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Título da Modal</h2> <br><br>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus voluptates temporibus at deleniti nam dolorem voluptatem perspiciatis nostrum ipsa iusto? Perspiciatis vel deserunt error dolores reiciendis cumque necessitatibus? Modi,
                        molestias?
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid bg-rodape">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-sm-12 col-md-12 mt-5 mb-2 text-center">
                <a href="https://api.whatsapp.com/send?phone=5514996553882" target="about_blank"><i class="fab fa-whatsapp mr-2 ml-2" id="iroda1"></i></i></a>
                <a href="https://www.instagram.com/natan_iansouza/" target="about_blank"><i class="fab fa-instagram mr-2 ml-2" id="iroda2"></i></a>
                <a href="https://www.facebook.com/natanian.massondesouza.9/" target="about_blank"><i class="fab fa-facebook-square mr-2 ml-2" id="iroda3"></i></a>
            </div>
            <div class="col-12 col-sm-12 col-md-12 text-center mb-3">
                <hr style="width: 14rem;">
                <h6 class="text-white">Todos os Direitos Reservados &copy</h6>
                <p class="text-white" style="font-size: 0.8rem;">Natan Ian M. de Souza</p>

            </div>
        </div>
    </div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center active" id="backtotop"><i class="fas fa-arrow-up"></i></a>
    
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/scroll.js"></script>
</body>
</html>