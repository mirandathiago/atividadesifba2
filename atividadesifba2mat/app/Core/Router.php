<?php
namespace Ifba\Core;

class Router{
    #Propriedade static (estática) é aquela que pertence a classe e não ao seus objetos, podendo ser utilizada diretamente sem precisar de um objeto ser criado para isso.
    protected static array $rotas = [];

    public static function add(string $url,string $controlador, string $metodo )
    {
        static::$rotas[$url] = [$controlador,$metodo];
    }
    
    public static function execute(string $url)
    {
        $rotas = static::$rotas;
        if( array_key_exists($url,$rotas) ){
            [$controlador,$metodo] = $rotas[$url];    
        }else{
            [$controlador,$metodo] = $rotas['__erro'];    
        }
        static::carregaController($controlador,$metodo);
    }

    public static function carregaController(string $controlador,string $metodo)
    {
        $nomectrl = "\\Ifba\\Controller\\{$controlador}";
        $c = new $nomectrl();
        $c->$metodo();
    }

}