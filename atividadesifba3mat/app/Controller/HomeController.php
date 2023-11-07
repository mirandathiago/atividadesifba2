<?php

namespace Ifba\Controller;

use Ifba\Core\Controller;

class HomeController extends Controller{




    public function index(){
        $dados = [
            'titulo' => 'Atividades Ifba',
            'data' => date('d/m/Y h:i:s')
        ];

       $this->view('inicial',$dados);
    }


}