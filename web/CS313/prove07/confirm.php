<?php
  require 'dbconnect.php';
  $rows = array();
  $sum = 0;
  $db = get_db();
  if (!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
  if (@$_POST['submit']) {
    @$_SESSION['cart'][$_POST['code']] = $_POST['num'];
  }
  foreach($_SESSION['cart'] as $code => $num) {
    $st = $db->prepare("SELECT * FROM goods WHERE code=?");
    $st->execute(array($code));
    $row = $st->fetch();
    $st->closeCursor();
    $row['num'] = strip_tags($num);
    $sum += $num * $row['price'];
    $rows[] = $row;
  }
  require 't_cart.php';
?>

<!DOCTYPE html>
<html lang="en"><head>
<TITLE>Confirmation</TITLE>
<link href="shop.css" type="text/css" rel="stylesheet" />
</head>
<body>
<a href="index.php">Browse</a>
<h1>Purchase Confirmation</h1>
	
		


<?php
  if (@$_POST['submit']) {
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $state = htmlspecialchars($_POST['state']);
    echo "<b>Shipping Address: </b>" .$address .", " .$city .", " .$state ."<br>";
    $_SESSION['cart'] = null;
    exit();
  }
?>
</body>
</html>