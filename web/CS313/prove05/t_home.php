<?php
include_once 'dbconnect.php';
if(!isset($_SESSION['user'])) {
    header("Location: index.php");
}
// ユーザーIDからユーザー名を取り出す
$query = "SELECT * FROM users WHERE user_id=".$_SESSION['user']."";
$result = $mysqli->query($query);

$result = $mysqli->query($query);
if (!$result) {
    print('クエリーが失敗しました。' . $mysqli->error);
    $mysqli->close();
    exit();
}

// ユーザー情報の取り出し
while ($row = $result->fetch_assoc()) {
    $username = $row['username'];
    $email = $row['email'];
}

// データベースの切断
$result->close();
?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My Page</title>
<link rel="stylesheet" href="style.css">
<!-- Bootstrap読み込み（スタイリングのため） -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
</head>
<body>
<div class="col-xs-6 col-xs-offset-3">
    <h1><a href="home.php">Supermarket</a></h1>
<ul>
  <li>Welcome　<?php echo $username; ?>　　</li>
</ul>

    <a href="logout.php?logout">Logout</a>
    <form role="search" method="get" id="searchform" action="userseek.php" >
        <input type="text" value="" name="s" class="s" />
        <input type="submit" class="searchsubmit" value="Search" />
    </form>
    <table>
        <?php foreach ($goods as $g) { ?>
            <tr>
                <td>
                    <?php echo img_tag($g['code']) ?>
                </td>
                <td>
                    <p class="goods"><?php echo $g['name'] ?></p>
                    <p><?php echo nl2br($g['comment']) ?></p>
                </td>
                <td width="80">
                    <p><?php echo $g['price'] ?> USD</p>
                    <form action="usercart.php" method="post">
                        <select name="num">
                            <?php
                            for ($i = 0; $i <= 9; $i++) {
                                echo "<option>$i</option>";
                            }
                            ?>
                        </select>
                        <input type="hidden" name="code" value="<?php echo $g['code'] ?>">
                        <input type="submit" name="submit" value="Add to cart">
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>