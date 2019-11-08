<?php
    session_start();
    require_once '../models/Game.php';
    require_once '../models/GameDAO.php';

    $valido =  false;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $valido = isset($_POST['titulo'], $_POST['lancamento'], $_POST['estado'], $_POST['categoria']);
    }
    
    if($valido){
        $nome = $_POST['titulo'];
        $data_lancamento = $_POST['lancamento'];
        $estado = $_POST['estado'];
        $categoria = $_POST['categoria'];

        $novo_jogo = new Game($nome, $data_lancamento, $estado, $categoria);
        $novo_jogoDAO = new GameDAO();
        $novo_jogoDAO->create($novo_jogo); 
    }
?>