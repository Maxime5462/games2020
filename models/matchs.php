<?php
require('utils/db.php');

function getMatchs($id)
{
    $db = dbConnect();

    $stmt = $db->prepare('SELECT home.short_name AS HOME,score_home,score_away,away.short_name AS AWAY,day FROM matchs
INNER JOIN teams AS home ON home.id=id_team_home
INNER JOIN teams AS away ON away.id=id_team_away
WHERE id_team_home=:id OR id_team_away=:id ');

    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    $stmt->execute();

    return $stmt->fetchAll();
}
?>
