<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function selectAll($table)
    {
        $state = $this->pdo->prepare('select * from {$table}');

        $state->execute();

        return  $state->fetchAll(PDO::FETCH_CLASS);
    }
}