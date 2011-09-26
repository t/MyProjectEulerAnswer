[ŠÈ’P][PHP]

function s($n){
  $n = $n . "";
  $a = array();
  for($i = 0; $i < strlen($n); $i++){
    $a[] = $n[$i];
  }
  sort($a);
  return join("", $a);
}

$i = 1;
while(true){
  $c = s($i);
  if($c == s($i * 2) &&
     $c == s($i * 3) &&
     $c == s($i * 4) &&
     $c == s($i * 5) &&
     $c == s($i * 6)){
    echo $i;
    break;
  }
  $i++;
}
