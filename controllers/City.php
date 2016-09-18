<?php

$cities = $app['database']->selectAllCity('city');

$cityId = $_POST['cityId'];

$streets = $app['database']->selectAllStreet($cityId);

 $count = count($streets);

 if($count > 0){
        echo '<option value="">Выберите улицу</option>';
        foreach ($streets as $street){ 
            echo '<option value="'.$street['id'].'" id="street-'.$street['id'].'">'.$street['name'].'</option>';
        }
    }else{
        echo '<option value="">Улицы не доступны</option>';
    }