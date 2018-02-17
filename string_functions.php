<?php

$string = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas recusandae consectetur repellat in dignissimos nulla aperiam dolore, aliquam non sunt?';

$compressed = gzcompress($string);

echo $compressed;

$original = gzuncompress($compressed);
echo '<br>';
echo $original;

?>