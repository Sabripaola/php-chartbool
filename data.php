<?php
  include 'function.php';
  $database = getDatabase();
  $database = json_encode($database);
  echo $database;
?>
