<?php

namespace Ifba\Controller;

use Ifba\Core\Controller;

class ErroController extends Controller{

    public function erro404(){
       $titulo = "Atividades IFBA";
       $this->view('404',compact('titulo'));
    }

}