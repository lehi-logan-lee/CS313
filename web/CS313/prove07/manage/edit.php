<?php
  require 'dbconnect.php';
  $db = get_db();
  $error = '';
  if (@$_POST['submit']) {
    $code = $_POST['code'];
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $price = $_POST['price'];
    if (!$name) $error .= 'No Item Name.<br>';
    if (!$comment) $error .= 'No Item Details.<br>';
    if (!$price) $error .= 'Price should not be 0.<br>';
    if (preg_match('/\D/', $price)) $error .= 'Price must be an interger.<br>';
    if (!$error) {
      $db->query("UPDATE goods SET name='$name',comment='$comment',price=$price WHERE code=$code");
      header('Location: index.php');
      exit();
    }
  } else {
    $code = $_GET['code'];
    $st = $db->query("SELECT * FROM goods WHERE code=$code");
    $row = $st->fetch();
    $name = $row['name'];
    $comment = $row['comment'];
    $price = $row['price'];
  }
  require 't_edit.php';
?>