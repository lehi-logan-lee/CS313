<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en"><head>
<TITLE>Browse Items</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<h1>Browse Items</h1>

<?php 
require_once "product-gallery.php";
?>
<div class="clear-float"></div>

<div id="shopping-cart">
<div class="txt-heading"><a href="cart.php" id="btnCart" >View Cart</a></div>
</div>

<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script>
function cartAction(action, product_code) {
    var queryString = "";
    if (action != "") {
        switch (action) {
        case "add":
            queryString = 'action=' + action + '&code=' + product_code
                    + '&quantity=' + $("#qty_" + product_code).val();
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
