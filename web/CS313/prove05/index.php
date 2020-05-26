<?php
require 'dbConnect.php';
$db = get_db();


$st = $db->query("SELECT * FROM goods");
$goods = $st->fetchAll();
require 't_index.php';
?>