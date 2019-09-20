<?php
    //usuario phpmyadmin: root senha em branco
    include "Usuario.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Teste</title>
    </head>
    <body>
        <form action="print.php" method="post">
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
            <input type="submit" value="Xablau" name="submit">
        </form>
    </body>
</html>