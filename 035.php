euler 35
[素数]

function is_prime($n){
  for($i = 2; $i < $n; $i++){
    if($n % $i == 0){
      return false;
    }
  }
  return true;
}

$count = 0;
for($i = 2; $i < 1000000; $i++){
  $s     = $i . "";
  $len   = strlen($s);
  $ok    = true;
  for($j = 0; $j < $len; $j++){
    $n = substr($s, $j, $len - $j) . substr($s, 0, $j);
    if(! is_prime($n + 0)){
      $ok = false;
      break;
    }
  }
  if($ok){
    var_dump($i);
    $count++;
  }
}
echo $count;

