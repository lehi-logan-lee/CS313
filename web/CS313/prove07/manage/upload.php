<?php
  require 'dbconnect.php';
  
  $error = '';
  if (@$_POST['submit']) {
    $code = $_POST['code'];
    if (move_uploaded_file($_FILES['pic']['tmp_name'], "../prove05/images/$code.jpg")) {
      header('Location: index.php');
      exit();
    } else {
      $error .= 'Please select the file<br>';
    }
  } else {
    $code = $_GET['code'];
  }
  require 't_upload.php';
?>