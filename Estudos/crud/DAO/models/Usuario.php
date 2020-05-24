<?php

    class Usuario{
        
        private $id;
        private $nome;
        private $email;
        private $senha;

      
        public function setId($id){
            $this->id = trim($id);
        }

        public function setNome($nome){
            $this->nome = ucwords(trim($nome));
        }

        public function setEmail($email){
            $this->email = strtolower(trim($email));
        }

        public function setSenha($senha){
            $this->senha = md5($senha);
        }

        public function getId(){
            return $this->id;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getSenha(){
            return $this->senha;
        }

    }

    interface UsuarioDAO{

        public function create(Usuario $user);
        public function readAll();
        public function readById($id);
        public function readByEmail($email);
        public function update(Usuario $user);
        public function delete($id);
    }