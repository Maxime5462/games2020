<?php
require('utils/db.php');

function getGames()
{
  $db = dbConnect();

  $stmt = $db->prepare('SELECT * FROM game ORDER BY name');

  $stmt->execute();

  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
