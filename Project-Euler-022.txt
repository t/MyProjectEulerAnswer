php

<?php

function score($index, $name){
  $ret = 0;
  for($i = 0; $i < strlen($name); $i++){
    $c = $name[$i];
    $n = ord($c) - ord('A') + 1;
    $ret += $n;
  }
  return $ret * ($index + 1);
}

$stdin = file_get_contents('php://stdin');
preg_match_all('#"(.+?)"#', $stdin, $m);
$list = $m[1];
sort($list);

$sum = 0;
foreach($list as $index => $name){
  $score = score($index, $name);
  $sum  += $score;
}

echo $sum;

?>
~
~
