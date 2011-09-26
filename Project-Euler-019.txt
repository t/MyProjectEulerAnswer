
javascript

var start_date = new Date("1901/1/1");
var end_date   = new Date("2000/12/31");

var sundays = 0;
var i = start_date;
while(i <= end_date){
  if(i.getDate() == 1 && i.getDay() == 0){
    sundays++;
  }
  i.setTime(i.getTime() + 24 * 60 * 60 * 1000);
}

console.log(sundays);
