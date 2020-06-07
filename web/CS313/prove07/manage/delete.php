<?php
  require 'dbconnect.php';
  $db = get_db();
  $st = $db->query("DELETE FROM goods WHERE code={$_GET['code']}");
  header('Location: index.php');
?>