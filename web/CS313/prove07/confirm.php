<?php
  require 'dbconnect.php';
  echo "test1<br>";
  $error = $name = $address = $tel = '';
  if (@$_POST['submit']) {
    echo "test2<br>";
    $name = htmlspecialchars($_POST['city']);
    $address = htmlspecialchars($_POST['address']);
    $tel = htmlspecialchars($_POST['state']);
    //echo $tel;
    //if (!$name) $error .= 'お名前を入力してください。<br>';
    //if (!$address) $error .= 'ご住所を入力してください。<br>';
    //if (!$tel) $error .= '電話番号を入力してください。<br>';
    //if (preg_match('/[^\d-]/', $tel)) $error .= '電話番号が正しくありません。<br>';
    if (!$error) {
      echo "test3<br>";
      $db = get_db();
     // echo '<h1>Purchase Confirmation</h1>'
     
      //if(isset($_SESSION["cart_item"])){
          //$item_total = 0;
     	/*echo '
      <table class="tutorial-table">
      <tbody>
      <tr>
      <th><strong>Name</strong></th>
      <th><strong>Code</strong></th>
      <th class="align-right"><strong>Quantity</strong></th>
      <th class="align-right"><strong>Unit Price</strong></th>
      <th class="align-right"><strong>subtotal</strong></th>
      <th></th>
      </tr>'	*/

      $body = "Your information\n\n"
       . "Name: $name\n"
       . "Address: $address\n"
       . "Phone: $tel\n\n";
       
      foreach($_SESSION['cart'] as $code => $num) {
        echo "test4<br>";
        $st = $db->prepare("SELECT * FROM goods WHERE code=?");
        $st->execute(array($code));
        $row = $st->fetch();
        $st->closeCursor();
        $body .= "Item Name: {$row['name']}\n"
          . "Unit Price: {$row['price']} USD\n"
          . "Quantity: $num\n\n";
        echo $body;
      }
      echo $body;
      //$from = "newuser@localhost";
      //$to = "newuser@localhost";
      //mb_send_mail($to, "購入メール", $body, "From: $from");
      $_SESSION['cart'] = null;
      //require 't_buy_complete.php';
      exit();
    }
  }
  //require 't_buy.php';
?>