<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'functions.php';


return new QueryBuilder(Connection::make());