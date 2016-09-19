<?php

$router->get('', 'controllers/Index.php');
$router->get('city/all', 'controllers/CityAll.php');
$router->get('nav', 'controllers/CityMenu.php');
$router->post('city/street', 'controllers/CityStreet.php');
$router->post('city/info', 'controllers/CityInfo.php');