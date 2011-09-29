[ŠÈ’P][PHP]

$n = "";
$i = 1;
while(strlen($n) <= 1000000){
  $n .= $i;
  $i++;
}
$result = 1;
for($i = 0; $i < 7; $i++){
  $d = $n[pow(10, $i) - 1];
  $result = bcmul($result, $d);
}
echo($result);
