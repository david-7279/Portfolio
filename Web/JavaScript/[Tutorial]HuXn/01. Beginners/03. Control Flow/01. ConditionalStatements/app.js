let a = 10;
let b = 20;

if (a > b){
  console.log("[" + a + "] is greater than [" + b + "]");
} else if(a < b) {
  console.log("[" + a + "] is less than [" + b + "]");
} else {
  console.log("[" + a + "] is equal to [" + b + "]");
}


let time = 12;
let minutes = 45;

if (time < 10){
  console.log("[" + time + ":" + minutes + "] Good Morning");
} else if (time < 20) {
  console.log("[" + time + ":" + minutes + "] Good Day");
} else {
  console.log("[" + time + ":" + minutes + "] Good Evening");
}