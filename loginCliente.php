<?php 

    $local_server = "localhost";
    $usuario_server = "root";
    $senha_server = "";
    $banco = "locadora";

    $conec = mysqli_connect($local_server, $usuario_server, $senha_server, $banco) or die ("Não é possível se conectar");

    $userCliente2=$_POST['userCliente2'];
    $senhaCliente2 = MD5($_POST['senhaCliente2']);

    $sqlbuscando = "SELECT * FROM clientela WHERE userCliente = '$userCliente2' AND senhaCliente = '$senhaCliente2'";

    $dados = mysqli_query($conec, $sqlbuscando) or die("Não foi possível buscar os dados!");

    if (mysqli_num_rows($dados)<=0){
        echo "Login incorreto. Nome ou senha inválidos.";
    }
    else {
        if (isset($userCliente2)){ //Verifica se a variável foi criada ou iniciada
            session_start();    //Iniciar a Sessão
            unset($_SESSION['userFunc2']);
            $_SESSION['userCliente2'] = $userCliente2; //Atribui para a variavel de sessão o nome do usuário autenticado
            header("Location: vitrine.php");
        }
    }

                        

                    ?>