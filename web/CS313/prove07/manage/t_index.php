<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Data Modification</title>
<link rel="stylesheet" href="kanri.css">
</head>
<body>
<div class="base">
    <a href="insert.php">Insert New Items</a>　
    <a href="../index.php" target="_blank">Confirm Site</a>
</div>
<table>
  <?php foreach ($goods as $g) { ?>
    <tr>
      <td>
        <?php echo img_tag($g['code']) ?>
      </td>
      <td>
        <p class="goods"><?php echo $g['name'] ?></p>
        <p><?php echo nl2br($g['comment']) ?></p>
      </td>
      <td width="80">
        <p><?php echo $g['price'] ?> USD</p>
        <p><a href="edit.php?code=<?php echo $g['code'] ?>">Update</a></p>

        <p><a href="delete.php?code=<?php echo $g['code'] ?>" onclick="return confirm('Are you sure to delete？')">Delete</a></p>
      </td>
    </tr>
  <?php } ?>
</table>
</body>
</html>