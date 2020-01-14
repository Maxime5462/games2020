<?php
require('models/players.php');

function listPlayer() {
    $listPlayer = getPlayers();
    require('views/players.php');
}

?>
