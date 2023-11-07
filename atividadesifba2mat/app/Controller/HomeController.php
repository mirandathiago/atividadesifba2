<?php

namespace Ifba\Controller;

use Ifba\Core\Controller;


class HomeController extends Controller{

    public function index(){
        $titulo = "Ifba Atividades";
        $dados = compact('titulo');
        $this->view('inicial',$dados);
    }


}