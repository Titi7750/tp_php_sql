<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Add garage</h1>

<form method="POST" action="add_garage.php">
    <label for="garage_name">Name</label>
    <input id="garage_name" name="garage_name" />

    <label for="garage_city">City</label>
    <input id="garage_city" name="garage_city" />

    <label for="garage_creation">Creation</label>
     <input id="garage_creation" name="garage_creation" type="date"/>

     <label for="garage_turnover">Turnover</label>
     <input id="garage_turnover" name="garage_turnover" type="number"/>

    <button type="submit">Envoyer</button>
 </form>
</body>
</html>

<?php

require('check_cookie.php');

?>