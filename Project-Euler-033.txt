Euler33 


$prod_n = 1;
$prod_d = 1;

for($i = 10; $i <= 99; $i++){
  for($j = $i + 1; $j <= 99; $j++){
    $n = $i . "";
    $d = $j . "";
    for($k = 0; $k < 2; $k++){
      for($l = 0; $l < 2; $l++){
        if($n[$k] == $d[$l] && $n[$k] != 0){
          $a = $n[1 - $k] + 0;
          $b = $d[1 - $l] + 0;
          if($b == 0) continue;
          if( ($i / $j) == ($a / $b)){
            //var_dump("$i / $j == $a / $b");
            $prod_n *= $a;
            $prod_d *= $b;
          }
        }
      }
    }
  }
}

for($i = 2; $i <= $prod_n; $i++){
  if($prod_n % $i == 0 && $prod_d % $i == 0){
     $prod_n = $prod_n / $i;
     $prod_d = $prod_d / $i;
     $i = 1;
  }
}

var_dump($prod_d);

