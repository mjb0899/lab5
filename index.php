<!DOCTYPE html>
<html>
<head>
    <title>hello Selector</title>
</head>
<body>
<p>WHere would you like say hello?</p>
<ul>
    <li><a href="printer.php?planet=earth">earth</a></li>
    <li><a href="printer.php?planet=mars">mars</a></li>
    <li><a href="printer.php?planet=uranus">uranus</a></li>
</ul>

<p>Learning post request</p>
<form action="formResponse.php" method="post">
    <label>Forename</label>
    <input type="text" name="forename">
    <label>Surname</label><input type="text" name="surname">
    <input type="submit" value="Submit">
</form>


<?php
$location="printer.php?user=mike";
HEADER($location);

$username=$_GET["planet"];
 echo "Hello".$username."This is username printing";
?>
</body>
</html>