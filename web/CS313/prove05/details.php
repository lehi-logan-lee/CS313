<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Supermarket</title>
    <link rel="stylesheet" href="shop.css">
</head>
<body>
<div id="header">
<a href="index.php"><h1>Supermarket</h1></a>

</div>

        <?php

        require 'dbconnect.php';
        $db = get_db();

        function validateInput($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

    function displayQuery($id, $db) {
        // $db=dbConnection();    
         $stmt = $db->prepare('SELECT * FROM goods WHERE code = :id');
         //$name= '$name';
         $stmt->bindValue(':id', $id, PDO::PARAM_INT);
         $stmt->execute();
         $book = $stmt->fetchAll(PDO::FETCH_ASSOC);
         return $book;
         }
     ​
         // If the page loads as a POST request, look for this variable, and if it is set
     if(isset($_GET['id'])) {
         // This is just for testing to make sure we have the correct text
         //echo "<h1>" . $_POST['bookToFind'] . "</h1>";
         // Validate & sanitize the input
         $searchText = validateInput($_GET['id']);
         // Now run the query to find the text in the database, and then save the results as a variable
         $books = displayQuery($searchText, $db);
       // Change the method name
       //print_r($books);
       
     ​
       }
        ?>
                <?php 
                
                foreach ($books as $g)
                {
                    echo img_tag($g['code'])
                    <p class="goods"><?php echo $g['name'] ?></p>
                    <p><?php echo nl2br($g['comment']) ?></p>

                    <p><?php echo $g['price'] ?> USD</p>
                  
                    <form action="cart.php" method="post">
                    <select name="num">
                      <?php
                        for ($i = 1; $i <= 10; $i++) {
                          echo "<option>$i</option>";
                        }
                      ?>
                    </select>
                    <input type="hidden" name="code" value="<?php echo $g['code'] ?>">
                    <input type="submit" name="submit" value="Add to cart">
                  </form>
                }

                ?>



        

</body>
</html>
