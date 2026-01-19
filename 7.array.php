<?php

// Array is collection of data stored in single variable in php we can store multiple data types in an array 
// syntax --> $array_name = array(value1, value2, value3,...);
// or $array_name = [value1, value2, value3,...];

$fruits = array("mango", "banana", "apple", "orrange");

for($i=0; $i<count($fruits);$i++){
    echo $fruits[$i] . "<br>";
}

// associative array---> array with key value  pairs

$user_data =[
    "name" =>"Ritesh",
    "age" => 25,
    "city" => "jaunpur",
    "country" => "India"
];

echo "Name: " .$user_data['name'] . "<br>";
echo "Age: " .$user_data['age'] . "<br>";

foreach($user_data as $key => $data){
    echo $key . ": " . $data . "<br>";
}

// multidimensional array---> array containg one or more arrays

$students = [
    [
        "name" => "Ritesh",
        "age"=> 25,
        "city" => "jaunpur"
    ],
    [
        "name"=> "partho",
        "age" => 24,
        "city" => "kolkata"
    ],
    [
        "name" => "sachin",
        "age" => 26,
        "city" => "delhi"
    ]
];

echo "<pre>";  
print_r($students);
echo "</pre>";


?>