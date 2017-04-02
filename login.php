
<?php
include ("dbConnect.php");

if(empty($_POST["username"])||empty($_POST["password"])){
    echo "both fields required";
}
else{
    $username=$_POST["username"];
    $password=$_POST["password"];
}

$sql="SELECT uid FROM mytable WHERE uname='$username'and password='$password'";

$result=mysqli_query($link,$sql);
if(mysqli_num_rows($result)==1)
{
    header("location:formResponse.php");
}
else{
    echo "Incorrect Username";
}
