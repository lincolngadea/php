<?php
    require_once 'models/Usuario.php';

    class UsuarioDaoMysql implements UsuarioDAO{

        private $pdo;

        public function __construct(PDO $pdo){

            $this->pdo = $pdo; //recebe os dados de conexão do mysql via $pdo do arquivo confi.php

        }
        
        public function create(Usuario $user){

            $sql = $this->pdo->prepare("INSERT INTO usuario (nome, email, senha) VALUES(:nome,:email,:senha)");
            $sql->bindValue(':nome', $user->getNome());
            $sql->bindValue(':email', $user->getEmail());
            $sql->bindValue(':senha', $user->getSenha());
            $sql->execute();
           

            $user->setId($this->pdo->lastInsertId());
            return $user;
        }
        public function readAll(){

            $array = [];

            $sql = $this->pdo->query("SELECT * FROM usuario");
            
            if($sql->rowCount() > 0){
                $data = $sql->fetchAll();

                foreach($data as $item){
                    $user = new Usuario();
                    $user->setId($item['id']);
                    $user->setNome($item['nome']);
                    $user->setEmail($item['email']);

                    $array[]=$user;
                }
            }

            return $array;

        }
        public function readById($id){
            $sql = $this->pdo->prepare("SELECT * FROM usuario WHERE id = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();

            if($sql->rowCount() > 0){
                
                $item = $sql->fetch();

                $user = new Usuario();
                $user->setId($item['id']);
                $user->setNome($item['nome']);
                $user->setEmail($item['email']);               

                return $user;

            }else{
                return false;
            }

        }

        public function readByEmail($email){

            $sql = $this->pdo->prepare("SELECT * FROM usuario WHERE email = :email");
            $sql->bindValue(':email', $email);
            $sql->execute();

            if($sql->rowCount() > 0){
                
                $item = $sql->fetch();

                $user = new Usuario();
                $user->setId($item['id']);
                $user->setNome($item['nome']);
                $user->setEmail($item['email']);               

                return $user;

            }else{
                return false;
            }


        }

        public function update(Usuario $user){
            if(!empty($user->getSenha())){
                $sql = $this->pdo->prepare("UPDATE usuario SET nome=:nome, email=:email, senha=:senha WHERE id=:id");

                $sql->bindValue(':nome', $user->getNome());
                $sql->bindValue(':email', $user->getEmail());
                $sql->bindValue(':senha', $user->getSenha());
                $sql->bindValue(':id', $user->getId());
                $sql->execute();
            }else{
                $sql = $this->pdo->prepare("UPDATE usuario SET nome=:nome, email=:email WHERE id=:id");

                $sql->bindValue(':nome', $user->getNome());
                $sql->bindValue(':email', $user->getEmail());
                $sql->bindValue(':id', $user->getId());
                $sql->execute();

            }
            
            return true;

        }
        public function delete($id){
            $sql = $this->pdo->prepare("DELETE FROM usuario WHERE id=:id");
            $sql->bindValue(':id',$id);
            $sql->execute();

        }

        

    }