<?php

namespace Ifba\Core;

#Classe abstrata é uma classe que é feita para ser herdada por outras classes. Ela não pode ser instanciada.

abstract class Controller{
 protected string $view_pasta = './app/View/';

 public function view(string $arquivo,array $dados = [])
 {
  $caminho = $this->view_pasta."{$arquivo}.view.php";
  extract($dados); #Extrai variaveis de um array associativo em que os indices são os nomes das variaveis e os valores são os valores das variaveis.
  if(file_exists($caminho)){
    require $caminho;
  }else{
    echo "<h2>Arquivo de View Não Existe</h2>";
  }  
   
 }
    
}