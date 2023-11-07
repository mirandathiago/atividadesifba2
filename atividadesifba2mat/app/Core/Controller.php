<?php

namespace Ifba\Core;
#Classes abstratas servem de base para serem estendidas por outras classes, não podendo ser diretamente instaciadas.

abstract class Controller{
 
    protected string $pastaView = "./app/view/";
    public function view(string $view, array $dados = [])
    {
        extract($dados); #Extrai variaveis de um array
        $caminho = $this->pastaView."{$view}.view.php";
        if(file_exists($caminho)){
            require $caminho;
        }else{
            echo "<h2>Arquivo de View Não Existe</h2>";
        }        
    }
    
}