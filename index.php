<!DOCTYPE html>
<html>
<head>
    <title>Test page</title>
</head>
<body>
<h1>html says hi</h1>
<form name="form" action="" method="get">
    <input type="text" name="age" id="subject" value="21">
</form>
<p>
    <?php
    echo "Hello World";
    echo "this break <br>"."or this or";
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
    echo "the value you entered is <br>";
    echo $_GET['age'];
    $myage=20;
    echo $myage;
    if($myage>16){
        echo "specs";
    }elseif ($myage<16){
        echo"no specs <br>";
    }

        $number=1;
        switch($number){
            case 1:
                echo "one";
                break;
            case 2:
                echo "two";
                break;
            default:
                echo "what the fuck";
                break;
        }
    ?>
</p>
</body>
</html>