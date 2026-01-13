<?php
// logical operator are used to combaine multiple condition  like And , or, not 

// AND (&&) operator --> both condition should be true
$age = 25;
$nationality ="indian";
if($age> 18 && $nationality =='indian'){
    echo " you are eligible to vote and live in india";
}
else{
    echo " cant vote and not live in india ";
}
echo "<br>";
// OR (||) operator -->any one condition should be true 
$age = 16;
$nationality = "indian";
if($age> 18 && $nationality =='indian'){
    echo " you are eligible to vote and live in india";
}
else{
    echo " cant vote and not live in india ";
}
echo "<br>";
// NOT (!) operator ---> reverse the condition 
 $status = true;
 if(!$status){
    echo "$status is false";
 }
 else{
    echo "$status is true";
 }



?>