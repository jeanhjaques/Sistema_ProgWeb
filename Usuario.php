<?php
    // definições de host, database, usuário e senha
    $host = "localhost";
    $db   = "usuario";
    $user = "root";
    $pass = "";
    // conecta ao banco de dados
    $con = mysqli_connect($host, $user, $pass); 
    // seleciona a base de dados
    mysqli_select_db($con, $db); //1° parametro e o retorno do mysqli_connect e o 2° e a database

    if(isset($_POST["submit"])){
        
        $nome = $_POST['nome'];
        $nsc = $_POST['nsc'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $cep = $_POST['cep'];
        $num_cartao = $_POST['cartao'];

        mysqli_query($con, "INSERT INTO usuario VALUES ('$cpf', '$nome', '$nsc', '$cep', '$endereco', '$num_cartao')");
        mysqli_close($con);
    }
?>