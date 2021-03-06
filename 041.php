euler41

[素数][重複を許さない順列]

function is_prime($n){
  if($n == 1) return false;
  for($i = 2; $i < $n; $i++){
    if($n % $i == 0){
      return false;
    }
  }
  return true;
}

$max = 987654321;
$not_primes = array();
for($i = 2; $i <= $max; $i++){
  if(! $not_primes[$i]){
    var_dump($i);
    for($j = 2; $i * $j <= $max; $j++){
      $not_primes[$i * $j] = true;
    }
  }
}
