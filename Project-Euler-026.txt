Project Euler 26

èzä¬è¨êî

javascript:

var f = function(n){
  var logs = {};
  var a = 1;
  var is_loop = false;
  var len = 0;
  while(1){
    a = Math.floor(a * 10);
    if(logs[a]) {
      is_loop = true;
      break;
    }
    logs[a] = true;
    len++;
    var a = a % n;
    if(a == 0) break;
  }

  if(is_loop){
    return len;
  }else{
    return false;
  }
}

var max_i = 0;
var max_len = 0;

for(var i = 0; i < 1000; i++){
  var len = f(i);
  if(len && len > max_len){
    max_len = len;
    max_i   = i;
  }
}
console.log(max_i);
~
~
~
