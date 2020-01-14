<?php

$route = isset($_GET['route']) ? $_GET['route'] : 'games';

if ($route === 'games') {
    require('controllers/games.php');
    listGame();
}
if ($route === 'players') {
    require('controllers/players.php');
    listPlayer();
}
if ($route === 'game') {
    require('controllers/game.php');
    $id = $_GET['id'];
    showGame($id);
}
if ($route === 'matchs') {
    require('controllers/matchs.php');
    $id = $_GET['id'];
    listMatch($id);
}
if ($route === 'classement') {
    require('controllers/classement.php');
    classement();
}
?>
