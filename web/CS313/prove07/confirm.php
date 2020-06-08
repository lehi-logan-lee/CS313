<?php
  require 'dbconnect.php';
  echo "test1<br>";
  $error = $name = $address = $tel = '';
  if (@$_POST['submit']) {
    echo "test2<br>";
    $name = htmlspecialchars($_POST['city']);
    $address = htmlspecialchars($_POST['address']);
    $tel = htmlspecialchars($_POST['state']);
    echo $tel;
    //if (!$name) $error .= 'お名前を入力してください。<br>';
    //if (!$address) $error .= 'ご住所を入力してください。<br>';
    //if (!$tel) $error .= '電話番号を入力してください。<br>';
    //if (preg_match('/[^\d-]/', $tel)) $error .= '電話番号が正しくありません。<br>';
    if (!$error) {
      echo "test3<br>";
      $db = get_db();
      $body = "商品が購入されました。\n\n"
       . "お名前: $name\n"
       . "ご住所: $address\n"
       . "電話番号: $tel\n\n";
      foreach($_SESSION['cart'] as $code => $num) {
        echo "test4<br>";
        $st = $db->prepare("SELECT * FROM goods WHERE code=?");
        $st->execute(array($code));
        $row = $st->fetch();
        $st->closeCursor();
        $body .= "商品名: {$row['name']}\n"
          . "単価: {$row['price']} 円\n"
          . "数量: $num\n\n";
      }
      
      $from = "newuser@localhost";
      $to = "newuser@localhost";
      mb_send_mail($to, "購入メール", $body, "From: $from");
      $_SESSION['cart'] = null;
      //require 't_buy_complete.php';
      exit();
    }
  }
  //require 't_buy.php';
?>