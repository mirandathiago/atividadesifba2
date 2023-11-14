<?php
namespace Ifba\Core;





class Router{
    #Métodos e Propriedades Estáticas (static) são aqueles que pertencem apenas a classe e não aos seus objetos podendo ser executados diretamente sem a necessidade da criação de objetos para isso.
    protected static array $rotas = [];

    public static function add($caminho,$controlador,$metodo)
    {
        static::$rotas[$caminho] = [$controlador,$metodo];
    }

    public static function execute($url)
    {
        $rotas = static::$rotas;
        if( array_key_exists($url,$rotas) ){
            [$controlador,$metodo] = $rotas[$url];
            static::carregaController($controlador,$metodo);
        }else{
            [$controlador,$metodo] = $rotas['__erro'];
            static::carregaController($controlador,$metodo);
        }
    }

    public static function carregaController($controlador,$metodo)
    {
        $namespace = "\\Ifba\\Controller\\";
        $nomecompleto = $namespace.$controlador;
        $c = new $nomecompleto();
        $c->$metodo();
    }

}