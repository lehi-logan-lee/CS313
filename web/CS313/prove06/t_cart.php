<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>cart | Supermarket</title>
<link rel="stylesheet" href="shop.css">
</head>
<body>
<h1>cart</h1>
<table>
  <tr><th>Item</th><th>Price</th><th>Quantity</th><th>Total</th></tr>
  <?php foreach($rows as $r) { ?>
    <tr>
      <td><?php echo $r['name'] ?></td>
      <td><?php echo $r['price'] ?></td>
      <td>
          <?php echo $r['num'] ?>
          <form action="cart.php" method="post">
            <select name="num">
                <?php
                echo "<option>Select</option>";
                for ($i = 0; $i <= 9; $i++) {
                    echo "<option>$i</option>";
                }
                ?>
            </select>
              <input type="hidden" name="code" value="<?php echo $r['code'] ?>">
              <input type="submit" name="submit" value="変更">
            </form>
      </td>
      <td><?php echo $r['price'] * $r['num'] ?> USD</td>
    </tr>
  <?php } ?>
  <tr><td colspan='2'> </td><td><strong>Total</strong></td><td><?php echo $sum ?> USD</td></tr>
</table>
<div class="base">
  <a href="index.php">Home　　</a>
  <a href="cart_empty.php">　Empty Cart　　</a>
</div>
</body>
</html>