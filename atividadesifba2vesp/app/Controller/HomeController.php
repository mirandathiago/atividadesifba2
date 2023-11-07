<?php

namespace Ifba\Controller;

use Ifba\Core\Controller;

class HomeController extends Controller{

    public function index(){
        $titulo = "Atividades IFBA";
        //$dados = ['titulo' => $titulo];
        #compact gera um array associativo a partir do nome de variaveis passadas que são localizadas na aplicação.
        $dados = compact('titulo');
        $this->view('inicial',$dados);
    }


}