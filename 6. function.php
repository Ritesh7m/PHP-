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
    echo " hello from php <br>";
}

$func = "say_hello"; // storing function name in a variable 

$func(); // calling the function using variable






?>