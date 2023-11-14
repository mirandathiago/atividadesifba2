<?php

namespace Ifba\Core;


class Database{

    protected \PDO $conexao;
    protected \PDOStatement $stmt;

    public function __construct(){
        
        $servidor = 'localhost';
        $banco = 'atividades3vesp';
        $usuario = 'root';
        $senha = '';
        
        $dsn = "mysql:host={$servidor};dbname={$banco}";
        $this->conexao = new \PDO($dsn,$usuario,$senha);

    }

    public function executarSql(string $sql,array $dados = [])
    {
        $this->stmt = $this->conexao->prepare($sql);
        return $this->stmt->execute($dados);
    }




}