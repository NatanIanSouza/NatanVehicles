<?php 
    session_start();
    unset($_SESSION['userCliente2']);
    unset($_SESSION['userFunc2']);
    header('Location: index.html');
?>