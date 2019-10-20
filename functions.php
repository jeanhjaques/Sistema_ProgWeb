<?php

    function InsertUser($nome, $nsc, $cpf, $endereco, $cep, $num_cartao, $login, $senha){
        require_once('conexao.php');
        
        if(($nome == null || $nsc == null || $cpf == null || $endereco == null || $cep == null || $num_cartao == null || $login == null || $senha == null)
        || ($nome == "" || $nsc == "" || $cpf == "" || $endereco == "" || $cep == "" || $num_cartao == "" || $login == "" || $senha == "")){
            echo "Preencha todos os campos";
        
        }else{
            mysqli_query($con, "INSERT INTO usuario VALUES ('DEFAULT', '$cpf', '$nome', '$nsc', '$cep', '$endereco', '$num_cartao', '$senha', '$login')");
            mysqli_close($con);
            echo "Cadastro realizado com sucesso";
            echo $nome;
        }
    }
?>