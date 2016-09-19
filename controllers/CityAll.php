<?php

$cityAll = $app['database']->selectAllCity('city');

$count = count($cityAll);

if($count > 0){
        echo '<option value="">Выберите город</option>';
        foreach ($cityAll as $city){ 
            echo '<option value="'.$city['id'].'" id="city-'.$city['id'].'">'.$city['name'].'</option>';
        }
    }else{
        echo '<option value="">Города не доступны</option>';
    }

