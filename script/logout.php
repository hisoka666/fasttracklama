<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="kumpulan/allscript.js"></script>
  <link rel="stylesheet" href="kumpulan/style.css"/>
</head>
<body>

<?php
session_start();

session_destroy();
	echo "<div class=\"container\" class=\"welcome\">";
	echo "Silahkan <a href=\"/\">Login</a>";
	echo "</div>";

?>

</body>
</html>