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

        <?php
        $data[0] = $_GET['code'];
        $data[1] = $_GET['name'];
        $data[2] = $_GET['comment'];
        $data[3] = $_GET['price']; 
        echo img_tag($data[0])
        ?>
        <p class="goods"><?php echo $data[1] ?></p>
        <p><?php echo nl2br($data[2]) ?></p>

        <p><?php echo $data[3] ?> USD</p>
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
        

</body>
</html>
