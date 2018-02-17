<?php

  $path = '/dir1/myfile.php';
  $file = 'file1.txt';

  // Return filename
  // echo basename($path);

  // Return Filename Without extension
  // echo basename($path, '.php');

  // Return the dir name from the path
  // echo dirname($path);

  // echo file_exists($file); -- will reqister true for folder

  // Get absolute path
  // echo realPath($file);

  // check to see if file -- is specific will not register true for folder
  // echo is_file($file);

  // check if writable - readable
  // echo is_writable($file);
  // echo is_readable($file);

  // echo filesize($file);

  //Create a directory / folder
  // mkdir('testing');

  // delete directory if empty
  // rmdir('testing');

  // copying a file
  // echo copy('file1.txt', 'file2.txt');

  // rename a file
  // rename('file2.txt', 'myfile.txt');

  // delete file
  // unlink('myfile.txt');

  // write from file to string
  // echo file_get_contents($file);

  // write string to file

  // echo file_put_contents($file, 'Goodbye World');

//   $current = file_get_contents($file);

//  $current .= ', Goodbye World';

//  file_put_contents($file, $current);

//  echo file_get_contents($file);

// open file for reading
// $handle = fopen($file, 'r');
// $data = fread($handle, filesize($file));
// echo $data;
// fclose($handle);

// open file for writing

$handle = fopen('file2.txt', 'w');
$text = "Words and Stuff\n";
$data = fwrite($handle, $text);
$text = "Steve Smith\n";
$data = fwrite($handle, $text);
fclose($handle);

echo file_get_contents('file2.txt');



?>