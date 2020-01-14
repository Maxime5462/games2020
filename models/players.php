<?php
require('utils/db.php');

function getPlayers()
{
  $db = dbConnect();

  $stmt = $db->prepare('SELECT * FROM players');

  $stmt->execute();

  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
