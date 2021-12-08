<?php 

    $local_server = "localhost";
    $usuario_server = "root";
    $senha_server = "";
    $banco = "locadora";

    $conect = mysqli_connect($local_server, $usuario_server, $senha_server, $banco) or die ("Não é possível se conectar");

    $chapa=$_POST['chapa'];
    $userFunc = $_POST['userFunc'];
    $senhaFunc = MD5($_POST['senhaFunc']);
    $nomeFunc=$_POST['nomeFunc'];
    $alternativaFunc=$_POST['alternativaFunc'];
    $cpfFunc=$_POST['cpfFunc'];
    $ruaFunc=$_POST['ruaFunc'];
    $numeroFunc=$_POST['numeroFunc'];
    $bairroFunc=$_POST['bairroFunc'];
    $cepFunc=$_POST['cepFunc'];
    $cidadeFunc=$_POST['cidadeFunc'];
    $estadoFunc=$_POST['estadoFunc'];
    $telefoneFunc=$_POST['telefoneFunc'];
    $emailFunc=$_POST['emailFunc'];

    $sqlbusca = "SELECT * FROM funcionarios WHERE userFunc = '$userFunc'";

    $oper = mysqli_query($conect, $sqlbusca) or die ("Não foi possível buscar os dados!"); 

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
    <title>Funcionário cadastrado</title>
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
        <h1 class="titles mt-5">Funcionário Cadastrado</h1>
    </div>

    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-12 col-sm-12 col-md-6  ">
            <div class="row bg-backform">
                <div class="col-12 col-sm-12 col-md-12 mt-4">
                    
                    <?php

                        if ($userFunc == "" || $userFunc = null){
                            echo "O campo não pode ser vazio!";
                        }

                        //verifica se já existe um usuário cadastrado no banco
                        else if (mysqli_num_rows($oper)>0){
                            echo "<h3>Usuário já existente!</h3>";
                        }

                        //insere um usuário no banco se não existir um já cadastrado
                        else if (mysqli_num_rows($oper)<=0){
                            $userFunc = $_POST['userFunc'];
                            $sqlinsere = "INSERT INTO funcionarios (chapa, userFunc, senhaFunc, nomeFunc, alternativaFunc, cpfFunc, ruaFunc, numeroFunc, bairroFunc, cepFunc, cidadeFunc, estadoFunc, telefoneFunc, emailFunc) VALUES ('$chapa', '$userFunc', '$senhaFunc', '$nomeFunc', '$alternativaFunc', '$cpfFunc', '$ruaFunc', '$numeroFunc', '$bairroFunc', '$cepFunc', '$cidadeFunc', '$estadoFunc', '$telefoneFunc', '$emailFunc')";
                            echo "<h3>Usuário inserido com sucesso!</h3>";
                            echo "<br><br>";
                            echo "CHAPA: $chapa <br><br> NOME: $nomeFunc <br><br> USUÁRIO: $userFunc <br><br> SEXO: $alternativaFunc <br><br> CPF: $cpfFunc <br><br> RUA: $ruaFunc <br><br> NÚMERO DA CASA: $numeroFunc <br><br> BAIRRO: $bairroFunc <br><br> CEP: $cepFunc <br><br> CIDADE: $cidadeFunc <br><br> ESTADO: $estadoFunc <br><br> TELEFONE: $telefoneFunc <br><br> E-MAIL: $emailFunc <br><br>";

                            if ($conect->query($sqlinsere) === TRUE) {
                                echo "";
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }  
                        }  
                        

                    ?>

                        <div class="row">
                            <form action="index.html">
                                <div class="row mt-3 mr-1 ml-1 ">
                                    <div class="col-12 col-sm-12 col-md-12 ">
                                        <button class="btn btn-personal ">Voltar</button> 
                                    </div>
                                </div>
                            </form>
                            <form action="func_login.html">
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