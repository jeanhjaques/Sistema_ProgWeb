<?php
    
    if(isset($_POST["submit"])){
        
        $nome = $_POST['nome'];
        $nsc = $_POST['nsc'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $cep = $_POST['cep'];
        $num_cartao = $_POST['cartao'];
        $login = $_POST['login'];
        $senha = MD5($_POST['senha']);

        InsertUser($nome, $nsc, $cpf, $endereco, $cep, $num_cartao, $login, $senha);
    }

    ini_set( 'display_errors', true );

    error_reporting( E_ALL );

    function InsertUser($nome, $nsc, $cpf, $endereco, $cep, $num_cartao, $login, $senha){
        require_once('conexao.php');
        
        if(($nome == null || $nsc == null || $cpf == null || $endereco == null || $cep == null || $num_cartao == null || $login == null || $senha == null)
        || ($nome == "" || $nsc == "" || $cpf == "" || $endereco == "" || $cep == "" || $num_cartao == "" || $login == "" || $senha == "")){
            echo "Preencha todos os campos";
        
        }else{
            mysqli_query($con, "INSERT INTO usuario (nome, nasc, cpf, ender, cep, num_cartao, login, senha) VALUES
             ($nome', '$nsc', '$cpf', '$endereco', '$cep', '$num_cartao', '$login', '$senha')");
            echo "Cadastro realizado com sucesso";
            echo $senha;
        }
    }
?>