<?php 

    $local_server = "localhost";
    $usuario_server = "root";
    $senha_server = "";
    $banco = "locadora";

    $conec = mysqli_connect($local_server, $usuario_server, $senha_server, $banco) or die ("Não é possível se conectar");

    $userFunc2=$_POST['userFunc2'];
    $senhaFunc2 = MD5($_POST['senhaFunc2']);

    $sqlbuscando = "SELECT * FROM funcionarios WHERE userFunc = '$userFunc2' AND senhaFunc = '$senhaFunc2'";

    $dados = mysqli_query($conec, $sqlbuscando) or die("Não foi possível buscar os dados!");


                        if (mysqli_num_rows($dados)<=0){
                            echo "Login incorreto. Nome ou senha inválidos.";
                        }
                        else {
                            if (isset($userFunc2)){ //Verifica se a variável foi criada ou iniciada
                                session_start();    //Iniciar a Sessão
                                unset($_SESSION['userCliente2']);
                                $_SESSION['userFunc2'] = $userFunc2; //Atribui para a variavel de sessão o nome do usuário autenticado
                                header("Location: adm.php");
                            }
                        }

                    ?>