<?php

class Connection
{
    public static function make()
    {
        try {
            return new PDO('mysql:host=gis35.ru;dbname=test', 'test', 'test_35');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}