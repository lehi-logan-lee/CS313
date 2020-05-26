<?php
require_once('./core/config.php');

$db = new PDO($host, $username, $password, $dbname);
if ($db->connect_error) {
  error_log($db->connect_error);
  exit;
}
?>