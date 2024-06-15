<?php

//if if else
//else if
//nested if
 
// $a = 5;
// $b = 10;

// if($a>$b){
//     echo "a is greater than b";
// }else{
//     echo "b is greater than a";
// }

// echo "<br>";
// if($a<$b)$c="hello";
// echo $c;

// echo "<br>";

// $d = $a<10? "a is less than 10":" a is greater than 10";
// echo $d;

// echo "<br>";
$e = 100;

//if if else

if($e>=100){
    echo "The number is greater than 100";
    if($e>200){
        echo "The number is greater than 200";

    }
    else{
        echo "The number is less than 200";
    }
}
echo "<br>";
// switch 
 $color="white";
 switch($color){
    case "yellow": echo "Your favourite color is Yellow";break;
    case "white" : echo "Your favourite color is white";break;
    default : "non of these";

 }
 echo "<br>";
 //loop
 //do while while for for each
  $i = 1;
  while($i<11){
    if($i==3)continue;
    if($i==5)break;
    echo $i;
    $i++;
  }

  while($i<3);
     echo $i;
  $i++;



?>
