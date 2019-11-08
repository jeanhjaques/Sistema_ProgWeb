<?php
    require_once 'Conexao.php';
    require_once 'Game.php';

    class GameDAO{

        public function create(Game $game){
            $query = 'INSERT INTO game (titulo, data_lancamento, estado, categoria) VALUES(?, ?, ?, ?)';
            $conn = Conexao::getConnect()->prepare($query);

            $conn->bindValue(1, $game->getTitulo());
            $conn->bindValue(2, $game->getLancamento());
            $conn->bindValue(3, $game->getEstado());
            $conn->bindValue(4, $game->getCategoria());

            $conn->execute();
        }

        public function read(Game $game){
            $query = 'SELECT * FROM game';
            $conn = Conexao::getConnect()->prepare($query);

            $conn->execute();

            if($conn->rowCount()>0){
                $resultado = $conn->fetchAll(\PDO::FETCH_ASSOC);
                return $resultado;
            }else{
                 return [];
            }
        }

        public function update(Game $game){
            $query = 'UPDATE game SET titulo = $game->getTitulo(), data_lancamento = ?, estado = ?, categoria = ? WHERE id = ?';
            $conn = Conexao::getConnect()->prepare($query);

            $conn->bindValue(1, $game->getTitulo());
            $conn->bindValue(2, $game->getLancamento());
            $conn->bindValue(3, $game->getEstado());
            $conn->bindValue(4, $game->getCategoria());
            $conn->bindValue(5, $game->getId());

            $conn->exacute();
        }

        public function delete($id){
            $query = 'DELETE FROM game WHERE id = $id';

            $conn = Conexao::getConnect()->prepare($query);

            $conn->bindValue(1, $id);

            $conn->execute();
        }
    }
?>