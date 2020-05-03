<!DOCTYPE html>
<html lang="en">

    <head>
    <title>PHP example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="ass7.css" />    
    </head>
    <body>
<?php

$apr = $_GET['aprName'];
$term = $_GET['termName'];
$amount = $_GET['amountName'];

$monthlyPay = (($apr/100/12)*$amount)/(1-(pow((1+($apr/100/12)),$term*(-12))));

echo "APR: ";
echo $apr;
echo "<br>";
echo "Loan Term: " . $term . "<br>";
echo "Loan Amount: " . $amount . "<br>";
echo "Monthly Payment: " . number_format($monthlyPay, 2, '.', "");
?>

    </body>
</html>