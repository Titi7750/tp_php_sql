<?php

require('check_cookie.php');

$garage_id = $_GET['garage_id'];

require('src/garage_queries.php');
$studentQueries = new GarageQueries();
$studentQueries->startConnection();
$succeed = $studentQueries->deleteGarage($garage_id);    


if($succeed == true) {
    header('Location:show_garages.php?alert=deleted');
} else {
    header('Location:show_garages.php?alert=error');
}



?>