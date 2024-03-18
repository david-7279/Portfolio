/*
function greet(username) {
  return `Hello, ${username}`
}
console.log('David');
*/

// Arrow Function
greetArrowFunction1 = (username) => {
  return `Hello, ${username}`;
};
console.log(greetArrowFunction1('David'));


const greetArrowFunction2 = username => `Hello, ${username}`;
console.log(greetArrowFunction2('David'));

/* 
1 | function double (n) { return n * 2}
2 | const double = n => n * 2;

console.log (`${double(2)}`);
*/