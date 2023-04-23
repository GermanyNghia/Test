<?php
$name = "nghia";
$age = 20;

$strenght = 23.33;


echo "Hello {$name} <br>";
echo "Your are {$age} <br>";
echo "Your power is: {$strenght} <br>";

echo "I like pizza and pasta <br> ";
echo "What do u like?";
//This is a comment
/*This
is
a 
multiline
comment
*/

//Arithmethic operators

$a = 3;
$b = 6;

    echo $a + $b;
    echo $a - $b;
    echo $a * $b;
    echo $a / $b;
    echo $a ** $b; //pow
    echo $a % $b;

    printf("\nHello\n");
//Increment/Decrement operators

$a++;
echo $a;
$b--;
echo $b;
$a+=2;
echo "{$a} <br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Chào mọi người</h1>

    <form action="index.php" method="post">
        <label>username:</label> <br>
        <input type="text" name="username"> <br>
        <label>password:</label> <br>
        <input type="password" name="password"> <br> 
        <input type="submit" value="Log in"> <br>
    </form>
    <form action="index.php" method="post">
        <label>x:</label> <br>
        <input type="number" name="x"> <br>
        <label>y:</label> <br>
        <input type="number" name="y"> <br> 
        <input type="submit" value="total"> <br>
    </form>
</body>
</html>

<?php

    // if ($_POST["username"] == null)
    // return false;
    // else
    echo $_POST["username"] . "<br>";

    // if ($_POST["password"] == null)
    // return false;
    // else
    echo $_POST["password"] . "<br>";
    
    
    if ($_POST["x"] == null)
    return false;
    else
    $x = $_POST["x"];

    if ($_POST["y"] == null)
    return false;
    else
    $y = $_POST["y"];
    

    $total = null;

    $total = abs($x);

    echo $total;
?>