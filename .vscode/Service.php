<?php

    class Service {
        private $conexao;
        private $model;

        public function __construct(Conexao $conexao, Model $modelo) {
            $this->conexao = $conexao->conexao();
            $this->model = $modelo;
        }
    }