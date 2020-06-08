<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Address</title>
<link rel="stylesheet" href="shop.css">
</head>
<script>
function myFunction() {
  document.getElementById("myForm").submit();
}
</script>
<body>
<h1>Check Out</h1>
<div class="base">
  <form id="myForm" action="confirm.php" method="post">
    <p>
      Address<br>
      <input type="text" name="address" size="60" value="<?php echo $address ?>" required>
    </p>
    <p>
      City<br>
      <input type="text" name="city" id="city" value="<?php echo $city ?>" required>
    </p>
    <p>
      State<br>
      <input type="text" name="state" value="<?php echo $state ?>" required>
    </p>
    <p>
      <input type="submit" name="submit" onclick="myFunction()" value="Complete the purchase" >
    </p>
  </form>
</div>
<div class="base">
  <a href="index.php">Browse     </a> 
  <a href="cart.php">Cart</a>
</div>
</body>
</html>