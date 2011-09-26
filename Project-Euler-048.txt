<?php

$sum = "0";
for($i = 1; $i <= 1000; $i++){
  $sum = bcadd($sum, bcpow($i, $i));
}

echo substr($sum, strlen($sum) - 10, 10);

?>
