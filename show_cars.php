<?php

require('check_cookie.php');

$garage_id = $_GET['garage_id'];

require('src/garage_queries.php');
$class = new GarageQueries();
$class->startConnection();
$class->showCars($garage_id);

?>