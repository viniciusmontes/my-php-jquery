<?php

    class Model {
        private $nome;
        private $sobrenome;

        public function __get($atributo) {
            return $this->$atributo;

        }

        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
            return $this;
        }


    }