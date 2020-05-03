<?php
echo '<head>
    <title>Purchase Review</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="ass7.css" />    
    </head>
    <body>
    <h1>Review & Pay</h1>';

$first = $_GET['first_name'];
$last = $_GET['last_name'];
$addr = $_GET['address'];
$phone = $_GET['phone'];

$items = $_GET['item'];

$total = 0;
$card = $_GET['card'];
$date = $_GET['exp_date'];

$dates = explode("/", $date);

echo "First Name: ";
echo $first;
echo "<br>";
echo "Last Name: ";
echo $last;
echo "<br>";
echo "Address: " . $addr . "<br>";
echo "Phone: " . $phone . "<br>";

echo "<br>";
if (isset($_GET['item'])) {
    echo "You chose the following item(s): <br>";

    foreach ($items as $item){
        $goods = explode(":", $item);
        echo $goods[0] . '<span style="margin-right: 5em;"></span>';
        echo $goods[1] . "<br />";
        $total += $goods[1];
    }
} else {
    echo "You did not choose a item.";
}

echo "<br>";
echo "Total Cost: " . number_format($total, 2, '.', "");
echo "<br>" . $card;
echo "<br>";
switch ($dates[0]) {
    case "01":
        echo "January";
        break;
    case "02":
        echo "February";
        break;
    case "03":
        echo "March";
        break;
    case "04":
        echo "April";
        break;
    case "05":
        echo "May";
        break;
    case "06":
        echo "June";
        break;
    case "07":
        echo "July";
        break;
    case "08":
        echo "August";
        break;
    case "09":
        echo "September";
        break;
    case "10":
        echo "October";
        break;
    case "11":
        echo "November";
        break;
    case "12":
        echo "December";
        break;
    default:
        echo "Your did not enter the correct month!";
}
echo " " . $dates[1];

echo "<form name=\"checkForm\" action=\"assign11_a.php\" method=\"get\">";
echo "<input type=\"submit\" name=\"confirm\" value=\"Confirm\">";
echo '<span style="margin-right: 2em;"></span>';
echo "<input type=\"submit\" name=\"cancel\" value=\"Cancel\">";
echo "</form>";
?>
