<!DOCTYPE html>
<html lang="en">

    <head>
    <title>Assign11</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="ass7.css" />
    </head>
    <body>
<?php

if (isset($_GET['confirm'])) {
echo '<h2>The purchase was confirmed</h2>';
}

else {
echo '<h2>The purchase was cancelled</h2>';
}
?>
    </body>
</html>