<?php

$val="black";//abyr val
$vbl=$val;

echo $vbl;

echo "<hr/>";

if($val == "red"){ #using rf variable
    echo "my fav color is red";
}else{
    echo "your fav color is not red";
}
echo "<hr/>";

if($val=="red"){
    echo "my fav color is red"." "."input value is ".$val;
}else{
    echo "my fav color is red"."but input value is ". $val;
}

echo "<hr/>";

/*
this is comment 1
this is comment 2
this is comment 3
this is comment 4
*/

if($val == "red"){
    echo "value color is " . $val;
}else if($val == "white"){ 
    echo " value color is " . $val;
}else{
    echo "your color is " . $val;
}

echo "<hr/>";

//Logical Operator
$num1=10;
$num2=20;
$num3=0;

if ($num1 > $num2 || $num1 < $num3){
    echo "true";
}else{
    echo "false";
}

echo"<hr/>";

switch ($num1) {
    case "10":
        echo "input value is" . $num1;
    break;

    case "20":
        echo "input value is" . $num1;
    break;

    dafault:
    echo "input value is not 10 and 20";
}
?>