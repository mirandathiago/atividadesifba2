<?php
namespace Ifba\Controller;

use Ifba\Core\Controller;
use Ifba\Core\Database;

class HomeController extends Controller{

   

    public function index()
    {
       $dados = [
        'titulo' => 'Atividades IFBA',
        'data' => date('d/m/Y')
       ];
       $this->view('inicial',$dados);
    }

    public function login()
    {
        $this->view('login');
    }

    public function criarconta()
    {

        $db = new Database();
        $sql = "INSERT INTO usuarios (nome,email,usuario,senha,lider,turma_id) VALUES (?,?,?,?,?,?)";
        $dados = ['Maria','maria@ifba.edu.br','maria','456',false,1];

        var_dump( $db->executarSql($sql,$dados) );


        #$this->view('criarconta');
    }


}