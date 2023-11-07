<?php

namespace Ifba\Core;



class Router{
    #Métodos e propriedades estáticos (static) são aqueles que pertencem a classe e não aos seus objetos. Não existe para acessá-los a necessidade de se ter um objeto baseado nesta classe.
    protected static array $rotas = [];
    
    public static function add($url,$controlador,$metodo)
    {
        static::$rotas[$url] = [$controlador,$metodo];
    }

    public static function execute($url)
    {
        $rotas = static::$rotas;
        #Verifico se a url passada existe como chave no array
        if( array_key_exists($url,$rotas) )
        {
            [$controlador,$metodo] = $rotas[$url];
        }else{
            [$controlador,$metodo] = $rotas['__erro'];
        }
        static::carregaController($controlador,$metodo);
    }

    protected static function carregaController($controlador,$metodo)
    {
        $controlador = "\\Ifba\\Controller\\{$controlador}";
        $ctr = new $controlador();
        $ctr->$metodo();
    }


}