<?php
require('models/team.php');

function showTeam($id) {
    $players = getPlayers($id);
    require('views/team.php');

}

?>
