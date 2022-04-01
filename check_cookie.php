<?php

if(!isset($_COOKIE['user_connected'])) {
    header('Location:auth.php');
}

?>