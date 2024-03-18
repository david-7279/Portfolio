/*
  Refers to the current context of code, which determinates the accessibility of variables to JavaScript.
  
  There are two types of scope:
  - Global scope
    -> Variables declared outside of a function are global and can be accessed and modified from anywhere in the program.
  
  - Local scope
    -> Variables declared inside of a function are local and can only be accessed and modified within that function.
*/

// Global
let textMessage = 'Global Scope';
console.log(textMessage);


// Loccal
function showMessage() {
  let textMessage = 'Local Scope';
  console.log(textMessage);
};
showMessage();