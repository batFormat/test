<?php

$cityId = $_POST['cityId'];

$cityInfo = $app['database']->selectCityInfo($cityId);

echo $cityInfo['0']['description'];