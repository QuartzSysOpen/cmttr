<html>
<head>
<?php
if($_POST) {
  $h = fopen("comment_text.html", "a");
  $name = stripslashes($_POST['name']);
  $comment = stripslashes($_POST['comment']);
  fwrite($h, $_POST['name'] . ": <br/>" . $_POST['comment'] . "<hr/>");
}
?>
<title>
Post a comment
</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css"/>
<body>
<div class="comments">
<form action="" method="POST">
<input type="text" name="name"/><br/>
<textarea name="comment" cols="8" rows="10"></textarea><br/>
<input type="submit" value="post"/>
</form>
</div>
<p>
<?php include("comment_text.html");?>
</p>
</body>
</html>