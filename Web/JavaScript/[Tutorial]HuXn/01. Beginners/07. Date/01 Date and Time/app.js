// Year, Month, Day, Hour, Minutes, Seconds, Miliseconds
const curretnDate =  new Date();
const creatDate = new Date (2024, 3, 18, 14, 31, 0 , 0);
console.log(curretnDate);
console.log(creatDate);

const date = new Date();
const year = date.getFullYear();
const month = date.getMonth();
const day = date.getDay();
const hour = date.getHours();
const minutes = date.getMinutes();
const miliseconds = date.getMilliseconds();

console.log(`Year: ${year}`);
console.log(`Month: ${month}`);
console.log(`Day: ${day}`);
console.log(`Hour: ${hour}`);
console.log(`Minutes: ${minutes}`);
console.log(`Miliseconds: ${miliseconds}`);

console.log(date.toDateString());
console.log(date.toISOString());
console.log(date.toLocaleDateString());

date.setDate(date.getDate() + 1);
console.log("The next day: ", date);