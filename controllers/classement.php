<?php
require('models/classement.php');

function classement() {
    $classement = getClassement();
    require('views/classement.php');
}

?>
