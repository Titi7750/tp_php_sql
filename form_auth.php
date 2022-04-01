<?php 

$firstname = $_POST['firstname'];
setcookie('user_connected', $firstname);
header('Location:show_garages.php');

if(!$firstname) {
    header('Location:auth.php?alert=error');
} else {
    header('Location:show_garages.php?alert=cookie_created');
}

?>