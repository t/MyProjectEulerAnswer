javascript

var pow = 5;
var sum = 0;
var f = function(d, n, m){
  var d2 = d + 1;
  for(var i = 0; i < 10; i++){
    var n2 = n + Math.pow(10, d) * i;
    var m2 = m + Math.pow(i, pow);
    if(n2 == m2 && i != 0 && n2 != 1){
      console.log(n2)
      sum += n2;
    }
    if(n2 <= m2){
      f(d2, n2, m2);
    }
  }
}
f(0, 0, 0);
console.log(sum);

