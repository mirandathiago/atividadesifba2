<?php

namespace Ifba\Model\DAO;

class ContaDAO{

    
    public function inserir($usuario)
    {
        $banco = new \Ifba\Core\Database();
        $sql = "insert into usuarios (nome,email,usuario,senha,lider,turma_id) VALUES (?,?,?,?,?,?)";

        $dados = ['João','joao@ifba.edu.br','joao','1234',0,1];

        var_dump( $banco->sql($sql,$dados) );
    }


}