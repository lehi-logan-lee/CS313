<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="Personal Page">
<meta name="author" content="Li Hai">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Li Hai's Home Page</title>
<link rel="stylesheet" type="text/css" href="prove02.css" />
</head>
<body>

<h1><b>Welcome to Li Hai's Home Page</b></h1>
<p><i>To make the world a better place</i></p>

<hr>

<a href="index.php">CSE341 Assignments</a>

<hr>

<div id="container">
<div class="grid-container">

<div class="item1">

</div>

<div class="item2">
<a href="http://en.hubei.gov.cn/">Hometown</a>
<a href="https://www.byui.edu/">Education</a>
<a href="https://www.brycen.co.jp/en/">Employment</a>
<a href="https://www.churchofjesuschrist.org/?lang=eng">Religion</a>
</div>

<div class="item3"><img src="images/OdaibaMe.jpg" alt="My photo" /></div>

<div class="item4">
  <a class="active" href="#About">About</a>
  <a href="#events">Events</a>
  <a href="#shop">Shop</a>
  <a href="#notes">Notes</a>
  <a href="#Calendar">Calendar</a> 
  <a href="#involve">Get involved</a>
  <a href="#vision">Vision&Mission&Value</a>
  <a href="#give">Giving</a>
</div>

<div class="item5">
  <h2>I speak 3 human languages, as well as some programming languages. I was born in China, lived in Japan for 6 years, now I am an Interdisciplinary Studies major with an emphasis in Computer Science Internet at Brigham Young University Idaho. I am a member of the Church of Jesus Christ of Later Day Saints, I believe that kindness, hard working, doing good is a commandment from God. I am very grateful for many people helped me in my life. I want to do something to make the world a better place.</h2>
  <h3>-LI HAI</h3>
</div>

<div class="item6">
<button onclick="document.getElementById('myImage').src='images/pic_bulbon.gif'">Light the world</button>

<img id="myImage" src="images/pic_bulboff.gif" style="width:100px">

<button onclick="document.getElementById('myImage').src='images/pic_bulboff.gif'">Save power</button>
<br>
<?php
$d1=strtotime("July 22");
$d2=ceil(($d1-time())/60/60/24);
$d3=strtotime("December 31");
$d4=ceil(($d3-time())/60/60/24);
$d5=strtotime("December 25");
$d6=ceil(($d5-time())/60/60/24);
echo "There are " . $d2 ." days until spring semester ends.";
echo "<br>";
echo "There are " . $d6 ." days until Chrismas.";
echo "<br>";
echo "There are " . $d4 ." days until this year ends.";
?>
</div>

<div class="item7">

  <div class="left">
<h4>CONTACT</h4>
<br>
<ul class="wbc">
<li>Colonial Heights Townhouses</li>
<li>Rexburg, ID 83440</li>
<li>lihai0119@gmail.com</li>
</ul>
  </div>

  <div class="middle1">
<h4>RESOURCES</h4>
<ul class="ccc">
<li><a href="../index.html">CS213</a></li>
<li><a href="index.php">CSE341</a></li>
<li><a href="https://github.com/lehi-logan-lee/CS313">Github</a></li>
<li><a href="https://dashboard.heroku.com/apps/stormy-falls-22403">Heroku</a></li>
</ul>
  </div>
	
  <div class="middle2">				
<h4>GET IN TOUCH</h4>
<ul class="ccc">
<li><a href="https://app.slack.com/client/T012WBZLYEL/C012CMLHV36">Slack</a></li>
<li><a href="https://byui.zoom.us/j/4408393067">Zoom1</a></li>
<li><a href="https://byui.zoom.us/j/5387600486">Zoom2</a></li>
<li><a href="https://www.zionsbank.com/">Payment</a></li>
</ul>
  </div>

  <div class="right">
<h4>FOLLOW ME</h4>
<ul class="ccc">
<li></li>
<li><a href="https://www.facebook.com/profile.php?id=100006861126767">Facebook</a></li>
<li><a href="https://www.instagram.com/lihai0119/">Instagram</a></li>
<li><a href="https://www.linkedin.com/in/hai-li-97a104158/">LinkedIn</a></li>
<li><a href="mailto:webmaster@example.com">Feedback</a></li>
</ul>
  </div>
</div>



<div class="item8">
<div class="footer">Posted by Li Hai</div>
<address>Privacy Policy | Terms & Conditions | &copy; <?php echo date("Y");?> All Rights Reserved</address>
</div>

</div>
</div>

</body>
</html>
