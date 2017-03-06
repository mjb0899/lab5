<!DOCTYPE html>
<html>
<head>
    <title>Test page</title>
</head>
<body>
<h1>html says hi</h1>
<p>
    <?php
    echo "Hello World";
    echo "Hello"." "."World"."!";
    echo 5*7;
    $myname="Morrison Barreto";
    $myage=111;
    echo "My name is" .$myname ."and my age is" .$myage;
    echo " I get printed";
    //ia am a comment and do not get printed
    if($myname=="Morrison Barreto")
    {
        echo "Hi".$myname. "you are logged in";
    }
    ?>
</p>
</body>
</html>