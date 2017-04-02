<!DOCTYPE html>
<html>
<head>
    <title>hello Selector</title>
</head>
<body>
<p>PHP LOGIN FORM</p>


<form action="login.php" method="post">
    <label>username</label>
    <input type="text" name="username">
    <label>Password</label><input type="text" name="password">
    <input type="submit" value="login">
</form>
<div class="error"><?php // echo $err or; ?><?php // echo $user name; echo $password; ?></ div>

<?php


?>
</body>
</html>