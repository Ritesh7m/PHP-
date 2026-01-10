<?php
/* php(hypertext preprocessor) is a server-side scripting language used to create dyanamic web pages it is written inside the <?php.?> and every statement ends with a semicolum (;) */
echo "Hello, World!<br>";
echo 10 + 10 . "<br>";

// varibalres --> A variables are container for storing data values in php  variable name start with a dollar sign($) followed by the name of variable 
$name = "Ritesh Maurya <br>"; // string 
echo "My name is " . $name;

// different data types in php
$age = 24; // integer
$cgpa = 8.5; // float 
$isStudent = true; // boolean 

// Arithmatic operator 
// + - * / ** %
$x = 10;
$y = 2;
echo "Sum of $x and $y is " . ($x + $y) . "<br>";
echo "minus of $x and $y is ", ($x - $y) . "<br>";
echo "product of $x and $y is ", ($x * $y) . "<br>";
echo "exponent of $x and $y is ", ($x ** $y) . "<br>";
echo "divide of $x and $y is ", ($x / $y) . "<br>";
// increment and decrement operator 

$count = 10;
$count += 5;
echo $count;






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learning php</title>
</head>

<body>
    <h1>to learn php click the button</h1>
    <button>click me</button>
</body>

</html>