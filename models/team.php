<?php
require('utils/db.php');

function getPlayers($idTeam)
{
    $db = dbConnect();

    $stmt = $db->prepare('SELECT players.*, teams.name AS team_name, teams.id AS team_id
        FROM players
        INNER JOIN players_has_teams ON players.id=players_has_teams.id_player
        INNER JOIN teams ON teams.id=players_has_teams.id_team
        WHERE teams.id= :id');

    $stmt->bindParam(':id', $idTeam, PDO::PARAM_INT);

    $stmt->execute();

    return $stmt->fetchAll();
}
?>
