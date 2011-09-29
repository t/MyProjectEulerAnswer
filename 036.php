<?php

$sum = 0;
for($i = 1; $i < 1000000; $i++){
  $s = $i + "";
  if($s == strrev($s)){
    $b = decbin($i);
    if($b == strrev($b)){
      $sum += $i;
    }
  }
}
echo $sum;
~
~
~
~
~
