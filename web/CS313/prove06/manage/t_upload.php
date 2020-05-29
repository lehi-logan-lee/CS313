<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Upload Photo</title>
<link rel="stylesheet" href="kanri.css">
</head>
<body>
<div class="base">
  <?php if ($error) echo "<span class=\"error\">$error</span>" ?>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <p>
      Item Images（Only JPEG）<br>
      <input type="file" name="pic">
    </p>
    <p>
      <input type="hidden" name="code" value="<?php echo $code ?>">
      <input type="submit" name="submit" value="Upload">
    </p>
  </form>
</div>
<div class="base">
  <a href="index.php">Return</a>　
</div>
</body>
</html>