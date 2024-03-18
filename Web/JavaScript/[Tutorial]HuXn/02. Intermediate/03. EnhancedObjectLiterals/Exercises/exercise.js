/* Exercise 1 */
const a = 1;
const b = 2;
const c = 3;

const obj = {
    a,
    b,
    c,
}

console.log(obj);


/* Exercise 2 */
const lib = {
  sum: (a, b) => a + b,
  mult: (a, b) => a * b,
};

console.log(lib.sum(2, 3));
console.log(lib.mult(2, 3));


/* Exercise 3 */
 function getPersionES5(name, age, height) {
   return {
     name,
     age,
     height,
   };
 }

console.log(getPersionES5("Zachary", 23, 195));