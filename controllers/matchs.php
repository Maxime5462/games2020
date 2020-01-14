<?php
require('models/matchs.php');

function listMatch($id) {
    $listMatch = getMatchs($id);
    require('views/matchs.php');
}

?>
