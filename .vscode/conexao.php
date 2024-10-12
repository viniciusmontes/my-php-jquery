<?php

    class Conexao {
        private $host = 'localhost';
        private $dbname = 'db_my_test';
        private $user = 'root';
        private $password = '';


        public function conexao() {
            try {
                $conexao = new PDO("mysql:host=$this->host;dbname = $this->dbname;$this->user, $this->password");
                return $conexao;
            } catch (PDOException $e) {
                echo $e;
            }
        }


    }
?>