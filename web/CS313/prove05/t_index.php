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

<form role="search" method="get" id="searchform" action="seek.php" >
    <input type="text" value="" name="s" class="s" />
    <input type="submit" class="searchsubmit" value="Search" />
</form>
</div>
<!-- Begin Yahoo Search Form
 <div style="margin:0;padding:0;font-size:14pt;border:none;background-color:#FFF;">
    <form action="http://search.yahoo.co.jp/search" method="get" target="_blank" style="margin:0;padding:0;">
        <p style="margin:0;padding:0;"><a href="http://www.yahoo.co.jp/" target="_blank"><img src="http://i.yimg.jp/images/search/guide/searchbox/080318/ysearch_logo_85_22.gif" alt="Yahoo! JAPAN" style="border:none;vertical-align:middle;padding:0;border:0;" width="85" height="22"></a><input type="text" name="p" size="31"><input type="hidden" name="fr" value="ysiw"><input type="hidden" name="ei" value="Shift_JIS"><input type="submit" value="検索" style="margin:0;"></p>
        <ul style="margin:2px 0 0 0;padding:0;font-size:10pt;list-style:none;">
            <li style="display:inline;"><input name="vs" type="radio" value="" checked="checked">ウェブ全体を検索</li>
            <li style="display:inline;"><input name="vs" type="radio" value="http://localhost/shop/">このサイト内を検索</li>
        </ul>link rel="stylesheet" href="shop.css">
    </form>
</div>
 End Yahoo! Search Form -->
<p>This is a list of goods from the database, click the pictures to see the good details</p>
<table class="sample">
  <?php foreach ($goods as $g) { ?>
    <tr>
      <td height="230">
      <?php echo "<a href="details.php?id=$g">
            img_tag($g['code'])
      </a>"  ?>
      </td>
    </tr>
  <?php } ?>
</table>

<a href="https://www.w3schools.com">Visit W3Schools.com!</a>
</body>
</html>