The Fibonacci sequence is defined by the recurrence relation:

Fn = Fn1 + Fn2, where F1 = 1 and F2 = 1.
Hence the first 12 terms will be:

F1 = 1
F2 = 1
F3 = 2
F4 = 3
F5 = 5
F6 = 8
F7 = 13
F8 = 21
F9 = 34
F10 = 55
F11 = 89
F12 = 144
The 12th term, F12, is the first term to contain three digits.

What is the first term in the Fibonacci sequence to contain 1000 digits?

・フィボナッチ数の問題

・動的計画法かな？

<?php

$f1 = "1";
$f2 = "1";
$i  = 3;
while(true){
  $f = bcadd($f1, $f2);
  if(strlen($f) >= 1000) break;

  $f2 = $f1;
  $f1 = $f;
  $i++;
}
echo $i;

?>


