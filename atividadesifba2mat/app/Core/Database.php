<?php

namespace Ifba\Core;


class Database{

    protected \PDO $conexao;
    protected \PDOStatement $stmt;

    public function __construct(){
        
        $servidor = 'localhost';
        $banco = 'atividades2mat';
        $usuario = 'root';
        $senha = '';
        
        $dsn = "mysql:host={$servidor};dbname={$banco}";
        $this->conexao = new \PDO($dsn,$usuario,$senha);

    }

    public function sql(string $sql, array $dados)
    {
        $this->stmt = $this->conexao->prepare($sql);
        return $this->stmt->execute($dados);
    }

}