<?php
// conditional statement execute the block of code when the specific condition meets like--> if age is greater than 18---> can vote else --> can't vote go and do study...
// some contional stmt are-->  if else switch condition  
// if else ---> check single condition and execute the block .
$age = 17;
 if($age>18){
    echo "you can vote";
 }
 else{
    echo " cant vote go and do study";
 }
 echo "<br>";
 $name ="RiteshM";
 if($name =="Ritesh"){
   echo "welcome Ritesh";
 }
 else{
   echo "<h1> you are not allowed </h1>";
 }

 // else if --> multipul condtion check 
 $fruit = "Banana";
 if($fruit =="Banana"){
   echo "eat banana";
 }
 elseif($fruit =="Apple"){
   echo 'eat apple';
 }
 elseif($fruit =="Mango"){
   echo "eat mango";
 }
 else{
   echo "eat any fruits available";
 }

echo "<br>";
 // switch case ---> when we have multiple condition to check we can use switch case
$month ="january";
switch($month){
   case "january":
      echo "this is the frist month of the year";
      break;
   case "february":
      echo "this is the second month of the year";
      break;
   case "march":
      echo "this is the third month of the year";
      break;
   default:
      echo "remaing months of the year";
      break;
}


?>