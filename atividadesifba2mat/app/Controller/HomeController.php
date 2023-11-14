<?php

namespace Ifba\Controller;

use Ifba\Core\Controller;
use Ifba\Core\Database;

class HomeController extends Controller{

    public function index(){
        $titulo = "Ifba Atividades";
        $dados = compact('titulo');
        $this->view('inicial',$dados);
    }

    public function login()
    {
        $this->view('login');
    }

    public function criarconta()
    {

       


        #$this->view('formconta');
    }


}