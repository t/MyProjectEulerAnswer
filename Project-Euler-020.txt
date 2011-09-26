ŠKæ



var f = function(n){
  if(n == 1) return 1;
  return n * f(n - 1);
}

var ret = f(100);
console.log(ret);
~
~

