<!DOCTYPE html>
<html>
<head>
    <title>hello Selector</title>
</head>
<body>
<p>WHere would you like say hello?</p>
<ul>
    <li><a href="printer.php">earth</a></li>
    <li><a href="printer.php">mars</a></li>
    <li><a href="printer.php">uranus</a></li>
</ul>




<?php
$query = $_GET["query"];
$type= $_GET["type"];
echo"The query is".$cat."and the type is". $type;
?>
</body>
</html>