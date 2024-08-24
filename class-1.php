<?php
echo "I am Ali\n";
$Name = "Salman";

echo "$Name\n";
$number1 = 5;
$number2 = 10;

$sum = $number1 + $number2;
echo"The result of the sum is $sum\n";

$height = 5.8;
echo"My height is $height feet\n";

$isMarried = true;
echo"$isMarried\n";

$cities = ['Dhaka','Sirajganj','Rajshahi'];
print_r($cities);
var_dump($cities);

define("SITE_NAME","smsalmanfarshi.com");
echo  SITE_NAME;

function sum1(){
  $num1 = 100;
  $num2 = 200;
  $total=$num1+$num2;
  echo "\n$total\n";

}
sum1();

function sum2(){
  global $number1,$number2;
  $add = $number1+$number2;
  echo"The result is $add";
}
sum2();



















