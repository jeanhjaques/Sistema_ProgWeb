<?php
    // definições de host, database, usuário e senha
    $host = "localhost";
    $db   = "usuario";
    $user = "root";
    $pass = "";
    // conecta ao banco de dados
    $con = mysqli_connect($host, $user, $pass); 
    // seleciona a base de dados
    //mysqli_select_db($con, $db); //1° parametro e o retorno do mysqli_connect e o 2° e a database
    if(!$con){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        echo "Sucesso na conexão";
    }
?>