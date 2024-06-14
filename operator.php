<?php
//Arithmetic operators
echo 10 + 10;
echo "<br>";

echo 10 -5 ;
echo "<br>";
 
echo 10 * 2 ;
echo "<br>";

echo 10/2;
echo "<br>";

echo 2**2;
echo "<br>";

//Assignment operators
$userName = "John";
$x =100;
$y =50;
//Addition
echo $x+=$y;
echo "<br>";

//Subtraction
echo $x-=$y;
echo "<br>";

//Multiplication
echo $x*$y;
echo "<br>";

//Division
echo $x/=$y;
echo "<br>";

//Modulus
echo $x%$y;
echo "<br>";

//Comparison Operators
//equal operators 
$data1=100;
$data2="100";
if($data1==$data2){
    echo "true";
}else{
    echo "false";
}

echo "<br>";
//greater than 
$z =100;
$w =200;
var_dump($w<$z);