<?php
require('models/teams.php');

function listTeam() {
    $listTeam = getTeams();
    require('views/teams.php');
}

?>
