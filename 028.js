var sum = 1;
var n   = 1;
for(var i = 3; i <= 1001; i += 2){
  var d = i - 1;
  for(var j = 0; j < 4; j++){
    n += d;
    sum += n;
  }
}
console.log(sum);
