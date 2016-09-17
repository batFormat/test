<?php

$query = require 'bootstrap.php';

$data = $query->selectAll('city');

die(var_dump($data));

require 'view/index.view.php';