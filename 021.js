—Fˆ¤”‚Ì–â‘è

javascript 

var f = function(n){
  var ret = 0;
  for(var i = 1; i < n; i++){
    if(n % i == 0){
      ret += i;
    }
  }
  return ret;
}

var sum = 0;
for(var i = 0; i < 10000; i++){
  var a = f(i);
  if(a > i){
    var b = f(a);
    if(b == i){
      sum += a;
      sum += b;
      //console.log(a + "," + b);
    }
  }
}

console.log(sum);
