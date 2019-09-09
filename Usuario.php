<?php
    $nome = (!empty($_GET['nome']) ? $_GET['nome'] : '');
    $nsc = (!empty($_GET['nsc']) ? $_GET['nsc'] : '');
    $cpf = (!empty($_GET['cpf']) ? $_GET['cpf'] : '');
    $endereco = (!empty($_GET['endereco']) ? $_GET['endereco'] : '');
    $cep = (!empty($_GET['cep']) ? $_GET['cep'] : '');
    $num_cartao = (!empty($_GET['cartao']) ? $_GET['cartao'] : '');

    // definições de host, database, usuário e senha
    $host = "localhost";
    $db   = "usuario";
    $user = "root";
    $pass = "";
    // conecta ao banco de dados
    $con = mysqli_connect($host, $user, $pass) or trigger_error(mysql_error(), E_USER_ERROR); 
    // seleciona a base de dados
    mysqli_select_db($con, $db); //1° parametro e o retorno do mysqli_connect e o 2° e a database
?>