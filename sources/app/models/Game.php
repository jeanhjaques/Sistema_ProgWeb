<?php
    class Game{
        private $id;//codigo do jogo no sistema
        private $titulo;
        private $data_lancamento;
        private $estado;//novo ou usado
        private $categoria;

        public function __construct($titulo, $data_lancamento, $estado, $categoria){
            $this->$titulo = $titulo;
            $this->$data_lancamento = $data_lancamento;
            $this->$estado = $estado;
            $this->$categoria = $categoria;
            $this->id = NULL;
        }

        public function getTitulo(){
            return $this -> titulo;
        }

        public function setNome($titulo){
            $this -> titulo = $titulo;
        }

        public function getLancamento(){
            return $this -> data_lancamento;
        }

        public function setLancamento($data_lancamento){
            $this -> data_lancamento = $data_lancamento;
        }

        public function getEstado(){
            return $this -> estado;
        }

        public function setEstado($estado){
            $this -> estado = $estado;
        }

        public function getCategoria(){
            return $this -> categoria;
        }

        public function setCategoria($categoria){
            $this -> categoria = $categoria;
        }

        public function getId(){
            return $this -> id;
        }

        public function setId($id){
            $this -> id = $id;
        }
        
    }
?>