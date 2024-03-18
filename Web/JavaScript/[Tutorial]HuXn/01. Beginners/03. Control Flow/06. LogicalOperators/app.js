/*
Logical Operators
  - Logical AND (&&) Both the operands should be true for the expression to be true
  - Logical OR (||) One of the operands should be true for the expression to be true
  - Logical NOT (!) It is used to reverse the logical state of its operand. If it’s true, then false and vice-versa.
*/

let a = true;
let b = false;
let c = 1;

console.log(a && b);
console.log(a || b);
console.log(!a);


let password = "david-vieira";

if (password.length >= 8 && password.includes("-")) {
  console.log("Password is strong");
} else {
  console.log("Password is weak");
}
