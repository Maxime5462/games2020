<?php
require('models/games.php');

function listGame() {
    $listGame = getGames();
    require('views/games.php');
}

?>
