
<!DOCTYPE html>
<html lang="en"><head>
<TITLE>Confirmation</TITLE>
<link href="shop.css" type="text/css" rel="stylesheet" />
</head>
<body>
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