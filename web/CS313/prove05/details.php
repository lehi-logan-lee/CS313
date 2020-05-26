<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Supermarket</title>
    <link rel="stylesheet" href="shop.css">
</head>
<body>
<div id="header">
<a href="index.php"><h1>Supermarket</h1></a>

</div>

<table class="sample">

    <tr>
      <td height="230">
        <?php echo img_tag($g['code']) ?>
        <p class="goods"><?php echo $g['name'] ?></p>
        <p><?php echo nl2br($g['comment']) ?></p>

        <p><?php echo $g['price'] ?> USD</p>
        <form action="cart.php" method="post">
          <select name="num">
            <?php
              for ($i = 1; $i <= 10; $i++) {
                echo "<option>$i</option>";
              }
            ?>
          </select>
          <input type="hidden" name="code" value="<?php echo $g['code'] ?>">
          <input type="submit" name="submit" value="Add to cart">
        </form>
        
      </td>
    </tr>

</table>

</body>
</html>
