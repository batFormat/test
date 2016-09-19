<?php

$cityAll = $app['database']->selectAllCity('city');

$count = count($cityAll);

if($count > 0){   
    foreach ($cityAll as $city){ 
 
  
  		}
    }else{
        echo '<li value="">Города не доступны</li>';
    }

