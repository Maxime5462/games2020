<?php
require('utils/db.php');

function getGames()
{
    $db = dbConnect();
    $page = (!empty($_GET['page']) ? $_GET['page'] : 1);
    $limite = 20;

    $debut = ($page - 1) * $limite;

    $stmt = $db->prepare('SELECT * FROM game ORDER BY name LIMIT :limite OFFSET :debut');

    $stmt->bindValue('debut', $debut, PDO::PARAM_INT);
    $stmt->bindValue('limite', $limite, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
