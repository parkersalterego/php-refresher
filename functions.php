<?php

function simpleFunction() {
  echo 'Hello World!';
  echo '<br>';
}

simpleFunction();

function sayHello($name = 'World') {
  echo "Hello $name! <br>";
}

function addNumbers($num1, $num2) {
  return $num1 + $num2;
}

sayHello('Adam');
sayHello();

echo addNumbers(3, 4);
echo '<br>';

$myNum = 10;

function addFive($num) {
  $num += 5;
}

function addTen(&$num) {
  $num += 10;
}

addFive($myNum);
echo "Value: $myNum<br>";

addTen($myNum);

echo "Value: $myNum<br>";
?>