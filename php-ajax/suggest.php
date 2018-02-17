<?php
  $people[] = "Steve";
  $people[] = "Jason";
  $people[] = "Karen";
  $people[] = "Victor";
  $people[] = "Susan";
  $people[] = "Michael";
  $people[] = "Cory";
  $people[] = "Jackie";
  $people[] = "Caroline";
  $people[] = "Cody";
  $people[] = "Gaetano";
  $people[] = "Stacy";
  $people[] = "Kevin";
  $people[] = "Elizabeth";
  $people[] = "Casey";
  $people[] = "Mary";
  $people[] = "Adam";
  $people[] = "Devon";
  $people[] = "Mark";

  // get query string
  $q = $_REQUEST['q'];

  $suggestion = "";

  // Get suggestions
  if($q !== '') {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($people as $person) {
      if (stristr($q, substr($person, 0, $len))) {
        if($suggestion === '') {
          $suggestion = $person;
        } else {
          $suggestion .= ", $person";
        }
      }
    }
  }

  echo $suggestion === '' ? 'No Suggestion' : $suggestion;
?>