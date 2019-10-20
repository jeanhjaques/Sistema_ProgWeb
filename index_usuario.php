<?php
    include "functions.php";
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Usuário</title>
    </head>
    <body>
        <form method="post">
            <span><strong>Nome: </strong></span>
            <input type="text" name="nome">
            <br>
            <br>
            <span><strong>Data de Nascimento: </strong></span>
            <input type="text" name="nsc">
            <br>
            <br>
            <span><strong>CPF: </strong></span>
            <input type="text" name="cpf">
            <br>
            <br>
            <span><strong>Endereço: </strong></span>
            <input type="text" name="endereco">
            <br>
            <br>
            <span><strong>CEP: </strong></span>
            <input type="text" name="cep">
            <br>
            <br>
            <span><strong>Número do Cartão: </strong></span>
            <input type="text" name="cartao">
            <br>
            <br>
            <span><strong>Login: </strong></span>
            <input type="text" name="login">
            <br>
            <br>
            <span><strong>Senha: </strong></span>
            <input type="password" name="senha">
            <br>
            <br>
            <input type="submit" value="Xablau" name="submit">
        </form>
        <br>
        <form action="index.php">
            <input type="submit" value="Voltar a tela de login">
        </form>
    </body>
</html>