<?php
require('models/game.php');

function showGame($id) {
    $games = getDataGame($id);
    require('views/game.php');

}

?>
