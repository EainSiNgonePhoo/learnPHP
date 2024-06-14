<?php
function add1 ($x1, $y1){
    $result1 =$x1 + $y1 ;
    echo $result1;

}
echo add (9,1);

echo "<br>";

$i=12;
if($i == 10){
    echo "True";
}
echo "<br>";

//declare function

//no arguments
function greet(){
    echo "Hi";

}
//call function
echo greet();

echo "<br>";

//with argument
function add($x,$y){
    $result = $x + $y;
    echo $result;

}
echo add(1,3);
echo "<br>";
echo add(100,200);
echo "<br>";

//default value
function sub($x = 30, $y= 20){
    $result = $x-$y;
echo $result;


}
echo sub();//
echo "<br>";
echo "<br>";
