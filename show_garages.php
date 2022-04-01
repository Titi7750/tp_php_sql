<?php
echo '<h1>';
echo '<a href="form_add.php">Add</a>'. ' ';
echo '<a href="auth.php">Cookies</a>'. ' ';
echo '</h1>';

require('src/garage_queries.php');
$class = new GarageQueries();
$class->startConnection();
$class->showGarages();


?>