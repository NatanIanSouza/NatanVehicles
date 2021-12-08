<?php

    if (session_status() == PHP_SESSION_NONE){ //Se não existir a sessão ela será iniciada
        session_start();
    }

    if (empty($_SESSION['userCliente2'])){ //Se a varável sessão estiver vazia ele não entra e volta para tela de login
        header("Location: cliente_login.html");
    }

?>