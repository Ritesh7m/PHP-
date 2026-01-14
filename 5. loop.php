<?php 
// loops are used to execute a block of code multiple times until a certain codition meets
// types os looop are ---> for , while , do while , foreach loop 
// when the number of iteration is know we use for loop 
 for($i=1;$i<=5;$i++){
    echo "the number is : $i <br>";
 }
 echo "<br>";
 // break statement --> used to terminate the loop when a specific condition meets;
 // continue statement --> skip the current iteration and move to the next itteration

 for($i=1;$i<=10;$i++){
    if($i==5){
        break; // terminate the loop when i = 5;
        continue; // skip the current itteration when i =5
    }
    echo "$i<br>";
 }

 // while loop --> when the number of iteration is not know we use while loop 
 $num = 10;
 while($num >0){
    echo " the number is : $num <br>";
    $num--;
 }
    echo "<br>";
//  do while loop --> execute the block of code at least once and then check the condition 

$count = 1;
do{
    echo " the count is : $count <br>";
    $count++;
}
while($count <5);
{
    echo "  the count is : $count <br>";
    $count++;
}

// for each loop --> shortcut to iterate over array and objects
$colors = array("red","green","blue","yellow");
foreach($colors as $color){
    echo ' color is: '.$color. '<br>';
}

// goto statement --> it is used to jump to a specific part of the code 
 $count =1;

 start:
 echo "the count is : $count <br>";
 $count++;

 if($count <=3){
    goto start;
}
else{
    echo "end of the loop";
}




?>