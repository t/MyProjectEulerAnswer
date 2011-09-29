Euler23 

完全数　過剰数

・24～28123の中で2つの過剰数の和で表せない数値の合計を求める。

・24～28123までの過剰数のリストを作る
・足し合わせられる数値があるかどうかチェックする

var is_abundant = function(n){
  var sum = 0;
  for(var i = 1; i < n; i++){
    if(n % i == 0){
      sum += i;
    }
  }
  return (sum > n);
}

var abundants = {};
for(var i = 1; i <= 28123; i++){
  if(is_abundant(i)){
    abundants[i] = true;
  }
}

var result = 0;
for(var i = 1; i <= 28123; i++){
  var ok = false;
  for(var j in abundants){
    var k = i - j;
    if(abundants[k]){
      ok = true;
      break;
    }
  }
  if(! ok){
    result += i;
  }
}
console.log(result);
