<?php 
// function are block of code that can be reused multiple times in a program 
// syntax --> function fun_name(){ block of code }
//function call ---> fun_name();

function greet(){
    echo "hello , welcom to php function <br>";
}
greet();
// function  with parameters

function  add($num1, $num2){
    $sum = $num1 + $num2;
   return $sum;
}
echo  add(10,5) . "<br>";

// function with default parameters 

function greet_user($name = "Guest" , $color = "green"){
    return "<h1 style='color:$color;'> hello $name , your favorite color is $color </h1><br>";
}
echo greet_user("Ritesh" ); // here if i dont pass the color it will take the defaut value green
echo greet_user(); // here if i dont pass any parameter it will take the default values

//  variable function ---> when a function name is stored in a variable and then that variable is used to call the function 

function say_hello(){
    echo " hello Ritesh <br>";
}

$func = "say_hello"; // storing function name in a variable 

$func(); // calling the function using variable

// callback function ---> a function that is passed as an argument to another function 

function display_message($a){
    echo "Message: $a <br>";
}

// display_message($say_hello());  // passing function as argument 

// some built in function in php 
$string = "Hello World from PHP";
echo strtolower($string). "<br>"; // convert string to lowercase
echo strtoupper($string). "<br>"; // convert string to uppercase
echo "there are ". strlen($string) ." characters <br>"; // length of string
$a =10;
var_dump($a); // display the  type and value of variable
echo "<br>";

echo date("Y-m-d H:i:s") . "<br>"; // current date and time

 echo rand(1,100) . "<br>"; // generate random number between 1 to 100

 // like that  is_string(), is_int(), is_array()  and many more built in function 


















?>