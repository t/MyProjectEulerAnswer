ŠKæ




var f1 = function(n){
  if(n == 0 || n == 1) return 1;
  return n * f1(n - 1);
}

var f2 = function(n){
  var s   = n + "";
  var sum = 0;
  for(var i = 0; i < s.length; i++){
    var c = parseInt(s[i]);
    sum += f1(c);
  }

  if(n == sum){
    console.log(n);
  }

}

for(var i = 0; i < 10000000; i++){
  f2(i);
