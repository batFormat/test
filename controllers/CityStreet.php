<?php

$cityId = $_POST['cityId'];

$streets = $app['database']->selectAllStreet($cityId);

$count = count($streets);

if($count > 0){
		echo '<option value=" ">Выберите улицу</option>';
        foreach ($streets as $street){ 
            echo '<option value="'.$street['to_city'].'" id="'.$street['id'].'">'.$street['name'].'</option>';
        }
    }
