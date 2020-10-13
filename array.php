<?php

$val1=["red","blue","black","gray","green"]; //manual array
$val2=["one"=>"this is post one",
      "two"=>"this is post two",
      "three"=>"this is post three",
      "four"=>"this is post four"];
       //associative array
$val3=[
     ["name"=>"Aung Aung","age"=>"20"],
     ["name"=>"Maung Maung","age"=>"21"],
     ["name"=>"Mya Mya","age"=>"22"],
     ["name"=>"Hla Hla","age"=>"23"]
]; //Multidimendional array
var_dump($val1);
echo "<hr/>";
var_dump($val2);
echo "<hr/>";
var_dump($val3);

echo "<hr/>";

echo $val1[0]; //manual array

echo "<hr/>";

echo $val2["two"];

echo "<hr/>";

echo $val3[2]["name"];

echo "<hr/>";

foreach($val2 as $data){
    echo $data. "<br/>";
}

echo "<hr/>";

foreach($val2 as $ass){
    echo $ass. "<br/>";
}

echo "<hr/>";

foreach($val3 as $multi){
    foreach($multi as $single){
        echo $single."<br/>";
    }
}
?>