<?php
session_start();
require 'cart.php';
?>
<!DOCTYPE html>
<html lang="en"><head>
<TITLE>Confirmation</TITLE>
<link href="shop.css" type="text/css" rel="stylesheet" />
</head>
<body>
<h1>Purchase Confirmation</h1>
	
<table class="tutorial-table">
<tbody>
<tr>
<th><strong>Name</strong></th>
<th><strong>Code</strong></th>
<th class="align-right"><strong>Quantity</strong></th>
<th class="align-right"><strong>Unit Price</strong></th>
<th class="align-right"><strong>subtotal</strong></th>
<th></th>
</tr>	

<tr>

<td></td>
</tr>
</tbody>
</table>		


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