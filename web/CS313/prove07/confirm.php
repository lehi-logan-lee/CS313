<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>cart | Supermarket</title>
<link rel="stylesheet" href="shop.css">
</head>
<body>
<h1>Purchase Information and Shipping Address</h1>
<h3 style="text-align:center">Thank you! your finsished the following purchase</h3>
<table>
  <tr><th>Item</th><th>Price</th><th>Quantity</th><th>Total</th></tr>
<?php
  require 'dbconnect.php';
  //echo "test1<br>";
  $error = $name = $address = $tel = '';
  if (@$_POST['submit']) {
    //echo "test2<br>";
    $city = htmlspecialchars($_POST['city']);
    $address = htmlspecialchars($_POST['address']);
    $state = htmlspecialchars($_POST['state']);
    //echo $tel;
    //if (!$name) $error .= 'お名前を入力してください。<br>';
    //if (!$address) $error .= 'ご住所を入力してください。<br>';
    //if (!$tel) $error .= '電話番号を入力してください。<br>';
    //if (preg_match('/[^\d-]/', $tel)) $error .= '電話番号が正しくありません。<br>';
    if (!$error) {
      //echo "test3<br>";
      $db = get_db();

      $shipAddr = "Your Shipping Address: \n\n"
       . "$address\n\n"
       . "City: $city\n\n"
       . "State: $state\n\n";
       
      foreach($_SESSION['cart'] as $code => $num) {
        $st = $db->prepare("SELECT * FROM goods WHERE code=?");
        $st->execute(array($code));
        $row = $st->fetch();
        $st->closeCursor();
        ?>
        <tr>
          <td><?php echo $row['name'] ?></td>
          <td><?php echo $row['price'] ?></td>
          <td>
              <?php echo $num ?>
          </td>
          <td><?php echo $row['price'] * $num ?> USD</td>
        </tr>
      <?php } ?>
      <tr><td colspan='2'> </td><td><strong>Total</strong></td><td><?php echo $sum ?> USD</td></tr>
      <tr><td colspan="4"><strong><?php echo $shipAddr ?></strong></td></tr>
</table>
<div class="base">
  <a href="index.php">Browse</a>
</div>
<?php
      //$from = "newuser@localhost";
      //$to = "newuser@localhost";
      //mb_send_mail($to, "購入メール", $body, "From: $from");
      $_SESSION['cart'] = null;
      //require 't_buy_complete.php';
      exit();
    }
  }
  //require 't_buy.php';
?>

</body>
</html>