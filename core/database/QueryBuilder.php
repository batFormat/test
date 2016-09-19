<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    /**
    * Select all cities
    */
    public function selectAllCity($table)
    {
        $state = $this->pdo->prepare("select * from {$table}");

        $state->execute();

        return  $state->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
    * Select all streets
    */

    public function selectAllStreet($cityId) {
       
        $sql = "select * from street where to_city = {$cityId}";

        $state = $this->pdo->prepare($sql);

        $state->execute();

        return $state->fetchAll(PDO::FETCH_ASSOC);

    }

   /**
    * Select city info 
    */
    public function selectCityInfo($cityId)
    {
        $sql = "select description from city where id = {$cityId}";

        $state = $this->pdo->prepare($sql);

        $state->execute();

        return $state->fetchAll(PDO::FETCH_ASSOC);
    }
    
}