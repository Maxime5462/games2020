<?php

$route = isset($_GET['route']) ? $_GET['route'] : 'teams';

if ($route === 'teams') {
    require('controllers/teams.php');
    listTeam();
}
if ($route === 'players') {
    require('controllers/players.php');
    listPlayer();
}
if ($route === 'team') {
    require('controllers/team.php');
    $id = $_GET['id'];
    showTeam($id);
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
