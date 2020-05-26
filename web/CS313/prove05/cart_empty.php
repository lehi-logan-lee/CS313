<?php
  require 'dbconnect.php';
  $_SESSION['cart'] = null;
  header('Location: cart.php');