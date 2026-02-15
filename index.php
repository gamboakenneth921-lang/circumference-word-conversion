<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>INPUT A WORD TO BE CALCULATED AS CIRCUMFERENCE</label><br>
        <input type="text" name="text"><br>
        <input type="submit" value="convert" id="convert">
       


    
    </form>
   
    
</body>
</html>
<?php





$text = $_POST["text"];

$radius = strlen($text);
echo"the value of the text was {$radius}<br>";
$pi = 3.14159265359;
$circumference = 2 * $pi * $radius;



    echo"youre gay {$circumference}";





/*
$fahrenheit = $_GET["celsius"];

$celsius = ($fahrenheit - 32) * 5 / 9;
echo "the temp was: {$celsius}";

   $item = $_GET["item"];
   $prize = 4.99;
   $quantity = $_GET["quantity"];

   $total = $prize * $quantity;

   echo "you have acquired {$quantity}x {$item} . <br>";
   echo "your total is {$total}";
*/

   

?>
