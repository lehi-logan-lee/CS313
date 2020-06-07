<?php
require 'dbconnect.php';
$db = get_db();
$s = $_GET["s"];
$goods = $db->query("SELECT * FROM goods WHERE name LIKE '%$s%'");
require 't_index.php';

$sql = "SELECT COUNT(code)FROM goods WHERE name LIKE '%$s%'";
$stmt = $db->query($sql);
?>

<!-- 検索キーワードと検索結果件数を<h1>で括って表示する
 $total_results = $pdo->query("SELECT COUNT(code)FROM goods WHERE name='$s'");
 $total_results = $pdo->query("SELECT COUNT(code) FROM(SELECT * FROM goods WHERE name='$s')");-->
<h3><?php echo $s; ?> search result<span>（ <?php echo $stmt->fetchColumn(); ?> found）</span></h3>

