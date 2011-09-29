<?php

$dic = array();

for($a = 2; $a <= 100; $a++){
  for($b = 2; $b <= 100; $b++){
    $dic[bcpow($a, $b)] = true;
  }
}

echo count($dic);

