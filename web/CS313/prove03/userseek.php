<?php
require 'common.php';
$pdo = connect();
$s = $_GET["s"];
$goods = $pdo->query("SELECT * FROM goods WHERE name='$s'");
require 't_home.php';

$sql = "SELECT COUNT(code)FROM goods WHERE name='$s'";
$stmt = $pdo->query($sql);
?>

<!-- 検索キーワードと検索結果件数を<h1>で括って表示する
 $total_results = $pdo->query("SELECT COUNT(code)FROM goods WHERE name='$s'");
 $total_results = $pdo->query("SELECT COUNT(code) FROM(SELECT * FROM goods WHERE name='$s')");-->
<h3><?php echo $s; ?>の検索結果<span>（ <?php echo $stmt->fetchColumn(); ?> 件）</span></h3>