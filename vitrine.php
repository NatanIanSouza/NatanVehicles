<?php include "verificaDuo.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="libs/icons/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Vitrine</title>
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
                    <a class="nav-link bg-link" href="adm.php" id="li3"><i class="fas fa-users-cog"></i> ADM<span class="sr-only"></span></a>
                </li>
            </ul>
            <form action="logoutCliente.php">
                                        <button class="btn btn-personal ml-4">Logout</button> 
                </form>
        </div>

    </nav>

    <div class="jumbotron gradient">
        <h1 class="titles mt-5">Vitrine de Automóveis</h1>
    </div>


    
        
                
                        
                        
                        <?php

                            $conn=mysqli_connect("localhost", "root", "","locadora");
                                            
                            $sql = "SELECT * FROM veiculos";
                            $qr = mysqli_query($conn,$sql) or die(mysqli_error());
                            echo '<div class="container-fluid">
                            <div class="row">';
                            while($ln = mysqli_fetch_assoc($qr)){
                                echo '<div class="col-12 col-sm-6 col-md-4 mt-3 mb-4">';
                                echo '<div class="row justify-content-center">';
                                echo '<div class="polaroid mb-4">';
                            echo '<h4 class="bg-texttitle text-center mt-4">'.$ln['modelo'].'</h4> <br />';
                            echo '<img src="imagens/'.$ln['imagem'].'" style="width: 100%;" /> <br /><br>';
                            echo 'Preço : R$ '.number_format($ln['preco'], 2, ',', '.').'<br /><br>';
                            echo '<a class="btn btn-personal" href="carrinho.php?acao=add&id='.$ln['codV'].'">Comprar</a><br>';
                            echo '<br />';
                            echo '</div>
                            </div>
                            </div>';
                            }   

                            echo '</div>
                    
                
                            </div>';

                        ?>
                        
            
        

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