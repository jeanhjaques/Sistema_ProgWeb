<?php
    include "Game.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Jogo</title>
    </head>
    <body>
        <form method="post">
            <span>Nome: </span>
            <input type="text" name="nome">
            <br>
            <span>Data de Lançamento: </span>
            <input type="number" name="data">
            <br>
            <input type="submit" value="Xablau" name="submit">
        </form>
    </body>
</html>