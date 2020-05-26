<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class UsuariosController extends Controller {

  public function add(){
      $this->render('add');
  }

  public function addAction(){

    $nome = filter_input(INPUT_POST,'nome');
    $email = filter_input(INPUT_POST,'email');

    if($nome && $email){

      $data = Usuario::select()->where('email', $email)->execute();

      if(count($data) === 0){

        Usuario::insert([
          'nome'=> $nome,
          'email'=> $email           
        ])->execute();
        //redirect para a raiz /
        $this->redirect('/');
        exit;
      }
    }
    //redirect para /novo      
    $this->redirect('/novo');
    
  }

}