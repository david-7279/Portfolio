let money1 = "7279";
/* Convert string to number
  money = parseInt(money);
  money = +money; same as above, but more concise
*/
money1 = Number(money1); // same as above, but more explicit

console.log(money1);
console.log("Convert string to number: ",typeof(money1));


let money2 = 7279;
/* Convert number to string
  money2 = money2.toString(); 
*/
money2 = String(money2);

console.log(money2);
console.log("Convert number to string: ", typeof(money2));


let money3 = '72.79';
/* Convert string to decimal
  money3 = money3.toString(); 
*/
money3 = parseFloat(money3);

console.log(money3);
console.log("Convert string to decimal: ",typeof(money3));