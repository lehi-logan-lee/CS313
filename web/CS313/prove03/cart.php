<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en"><head>
<TITLE>Shopping Cart</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<h1>Shopping Cart</h1>
<div><a href="index.php" id="btnHome" >Browse Items</a></div>
<div><a href="checkout.php" id="btnHome" > Check Out</a></div>
<div class="clear-float"></div>
<div id="shopping-cart">
<div class="txt-heading">Shopping Cart <a id="btnEmpty" class="cart-action" onClick="cartAction('empty','');"><img src="images/icon-empty.png" /> Empty Cart</a></div>
<div id="cart-item">
<?php 
require_once "ajax-action.php";
?>
</div>
</div>
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script>
function cartAction(action, product_code) {
    var queryString = "";
    if (action != "") {
        switch (action) {
        case "remove":
            queryString = 'action=' + action + '&code=' + product_code;
            break;
        case "empty":
            queryString = 'action=' + action;
            break;
        case "update":
            queryString = 'action=' + action + '&code=' + product_code + '&quantity=' + $("#qty_" + product_code).val();;
            break;
        }
    }
    jQuery.ajax({
        url : "ajax-action.php",
        data : queryString,
        type : "POST",
        success : function(data) {
            $("#cart-item").html(data);
        },
        error : function() {
        }
    });
}
</script>
</body>
</html>