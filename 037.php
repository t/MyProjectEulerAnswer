euler 37
[素数]

function is_prime($n){
  if($n == 1) return false;
  for($i = 2; $i < $n; $i++){
    if($n % $i == 0){
      return false;
    }
  }
  return true;
}

$count = 0;
$sum   = 0;
$i     = 10;
while($count < 11){
  $ok  = true;
  $s   = $i . "";
  $len = strlen($s);
  for($j = 1; $j <= $len; $j++){
    $sub1 = substr($s, $len - $j, $j);
    $sub2 = substr($s, 0, $j);
    if(! is_prime($sub1) || !is_prime($sub2)){
      $ok = false;
      break;
    }
  }
  if($ok){
    var_dump("ok:" . $i);
    $sum += $i;
    $count++;
  }
  $i++;
}
var_dump($sum);
