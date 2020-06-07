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
<?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>	
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
<?php		
    foreach ($_SESSION["cart_item"] as $item){
		?>
				<tr>
				<td><strong><?php echo $item["name"]; ?></strong></td>
				<td><?php echo $item["code"]; ?></td>
				<td align="right"><?php echo $item["quantity"]; ?></td>
				<td align="right"><?php echo "$".$item["price"]; ?></td>
        <td align="right"><?php echo "$".($item["price"]*$item["quantity"]); ?></td>
				</tr>
				<?php
        $item_total += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="4" align=right><strong>Total:</strong></td>
<td align=right><?php echo "$". number_format($item_total,2); ?></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php
}
?>

<?php
  if (@$_POST['submit']) {
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $state = htmlspecialchars($_POST['state']);
    echo "<b>Shipping Address: </b>" .$address .", " .$city .", " .$state ."<br>";
    $_SESSION['cart_item'] = null;
    exit();
  }
?>
</body>
</html>