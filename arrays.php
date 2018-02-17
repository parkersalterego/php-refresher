<?php

#Array - variable that holds multiple values
/* 

  -Indexed
  -Associative
  -Multi-Dimensional

*/

//Indexed
// $people = array('Kevin', 'Jeremy', 'Sara');

// echo $people[1];

# Associative arrays - key: value

// $brad = array('age' => 35, 'city' => 'Fresno', 'state' => 'California');

// $brad['favoriteColor'] = 'red';

// echo $brad['favoriteColor'];
// print_r($brad);
// var_dump($brad);

#MULTI DIMENSIONAL ARRAYS
$cars = array(
  array('Honda', 20, 10),
  array('Toyota', 30, 20),
  array('Ford', 23, 12),
);

echo $cars[1][0];

?>