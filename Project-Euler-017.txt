If the numbers 1 to 5 are written out in words: one, two, three, four, five, then there are 3 + 3 + 5 + 4 + 4 = 19 letters used in total.

If all the numbers from 1 to 1000 (one thousand) inclusive were written out in words, how many letters would be used?


NOTE: Do not count spaces or hyphens. For example, 342 (three hundred and forty-two) contains 23 letters and 115 (one hundred and fifteen) contains 20 letters. The use of "and" when writing out numbers is in compliance with British usage.

var dic = {
   0: "",
   1: "one",
   2: "two",
   3: "three",
   4: "four",
   5: "five",
   6: "six",
   7: "seven",
   8: "eight",
   9: "nine",
  10: "ten",
  11: "eleven",
  12: "twelve",
  13: "thirteen",
  14: "fourteen",
  15: "fifteen",
  16: "sixteen",
  17: "seventeen",
  18: "eighteen",
  19: "nineteen",
  20: "twenty",
  30: "thirty",
  40: "forty",
  50: "fifty",
  60: "sixty",
  70: "seventy",
  80: "eighty",
  90: "ninety"
};

var f1 = function(n){

  var ret = "";
  if(n < 20){
    ret += dic[n];
  }else{
    var u = Math.floor(n / 10) * 10;
    var l = n % 10;

    ret += dic[u];
    ret += dic[l];
  }

  return ret;
};

var f2 = function(n){
  var u = Math.floor(n / 100);
  var l = n % 100;

  var ret = "";
  if(u > 0){
    ret += f1(u) + "hundred";
    if(l > 0){
      ret += "and";
    }
  }
  if(l > 0){
    ret += f1(l);
  }

  return ret;
};

var ret = [];
for(var i = 1; i < 1000; i++){
  ret.push(f2(i));
}
ret.push("onethousand");

var l = 0;
for(var i = 0; i < ret.length; i++){
  l += ret[i].length;
}
console.log(l);


