<!DOCTYPE html>
<html>
<head>
    <title>Test page</title>
</head>
<body>
<h1>html says hi</h1>
<form name="form" action="" method="get">
    <input type="text" name="age" id="subject" value="Car Loan">
</form>
<p>
    <?php
    echo "Hello World";
    echo "this break \n"."or this or";
    echo "this is \r\n"."and we good to go";
    echo "Hello"." "."World"."!";
    echo 5*7;
    $myname="Morrison Barreto";
    echo "My name is" .$myname ."and my age is";
    echo " I get printed";
    //ia am a comment and do not get printed
    if($myname=="Morrison Barreto")

    {
        echo "Hi".$myname. "you are logged in";
    }
    echo "the value you entered is";
    echo $_GET['age'];
    $myage=$_GET['age'];
    echo $myage;
    if($myage>16){
        echo "specs";
    }elseif ($myage<16){
        echo"no specs";
    }

    ?>
</p>
</body>
</html>