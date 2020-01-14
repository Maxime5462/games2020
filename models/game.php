<?php
require('utils/db.php');

function getDataGame($idGame)
{
    $db = dbConnect();

    $stmt = $db->prepare('SELECT *,editor.name as name_editor
        FROM game
        INNER JOIN editor ON game.editor_id = editor.id
        WHERE game.id= :id');

        $stmt->bindParam(':id', $idGame, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetchAll();
    }
    ?>
