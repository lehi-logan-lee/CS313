<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add Items</title>
<link rel="stylesheet" href="kanri.css">
</head>
<body>
<div class="base">
  <?php if ($error) echo "<span class=\"error\">$error</span>" ?>
  <form action="insert.php" method="post">
    <p>
      Item Name<br>
      <input type="text" name="name" value="<?php echo $name ?>">
    </p>
    <p>
      Item Details<br>
      <textarea name="comment" rows="10" cols="60"><?php echo $comment ?></textarea>
    </p>
    <p>
      Price<br>
      <input type="text" name="price" value="<?php echo $price ?>">
    </p>
    <p>
      <input type="submit" name="submit" value="Add">
    </p>
  </form>
</div>
<div class="base">
  <a href="index.php">Return</a>　
</div>
</body>
</html>