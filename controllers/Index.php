<?php

$cities = $app['database']->selectAllCity('city');

require 'views/index.view.php';