<?php
  // single line comment
  # single line comment
  /* Multi
  Line
  Comment
   */

  // echo 'Hello World';

  #VARIABLES
  /*
  
    - Prefix $
    - starts with a letter or an _
    - Only letters, numbers and _
    - case sensitive
  
  */

  #DATA TYPES
  /* 
    String
    Int
    floats -- decimals
    bool
    arrays
    objects
    null
    resource -- return or func reference
  */

  $output = 'HelloWorld';

  $num1 = 4;
  $num2 = 10;
  $sum = $num1 + $num2;

  $string1 = 'Hello';
  $string2 = 'World';
  $greeting = $string1 . ' ' . $string2 . '!';
  $greeting2 = "$string1 $string2!";

  $string3 = "They're Here";

  $float1 = 4.4;
  $bool1 = true;

  define('GREETING', 'Hello Everybody');

  echo GREETING;

?>