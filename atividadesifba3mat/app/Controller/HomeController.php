<?php

namespace Ifba\Controller;

use Ifba\Core\Controller;
use Ifba\Core\Database;

class HomeController extends Controller{

    public function index(){
        $dados = [
            'titulo' => 'Atividades Ifba',
            'data' => date('d/m/Y h:i:s')
        ];

       $this->view('inicial',$dados);
    }

    public function login()
    {
       $this->view('login');
    }

    public function criarconta()
    {
        $sql = "INSERT INTO usuarios (nome,email,usuario,senha,lider,turma_id) VALUES (?,?,?,?,?,?)";
        $dados = ['João','joao@ifba.edu.br','joao','1234',false,1];

        $db = new Database();
        var_dump( $db->executaSQL($sql,$dados) );


        $this->view('conta');
    }


}