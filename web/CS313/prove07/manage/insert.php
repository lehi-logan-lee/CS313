<?php
  require 'dbconnect.php';
  $db = get_db();
  $error = $name = $comment = $price = '';
  if (@$_POST['submit']) {
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $price = $_POST['price'];
    if (!$name) $error .= 'No Item Name.<br>';
    if (!$comment) $error .= 'No Item Details.<br>';
    if (!$price) $error .= 'Price can not be 0.<br>';
    if (preg_match('/\D/', $price)) $error .= 'Price must be a integer.<br>';
    if (!$error) {
      $db->query("INSERT INTO goods(name,comment,price) VALUES('$name','$comment',$price)");
      header('Location: index.php');
      exit();
    }
  }
  require 't_insert.php';
?>