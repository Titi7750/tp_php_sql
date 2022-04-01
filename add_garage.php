<?php

  $new_garage = [
    "garage_name" => $_POST['garage_name'],
    "garage_city" => $_POST['garage_city'],
    "garage_creation" => $_POST['garage_creation'],
    "garage_turnover" => $_POST['garage_turnover']
  ];

  require('src/garage_queries.php');

  $class = new GarageQueries();
  $class->startConnection();
  $succeed = $class->addGarage($new_garage);

  if($succeed == true) {
    echo "Added";
    header('Location:show_garages.php?alert=added');
  } else {
    echo "Error";
    header('Location:show_garages.php?alert=error');
  }
    
?>