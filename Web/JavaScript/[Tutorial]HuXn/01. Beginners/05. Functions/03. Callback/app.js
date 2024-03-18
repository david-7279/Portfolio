// When we provide function as an argument to other function that function is know as callback function.
// showCallFunc (function(){})


// Declaring the function as 'showCallFunc' and passing another function 'fn' as an argument
function showCallFunc (fn) {
  const value = 10;
  fn(value);
};

// Calling the function and passing the callback function
showCallFunc(function (value) {
  console.log(value); // Passing the value to the callback function 'fn(value)'
});


function greetings (name, callBack) {
  console.log(`Hello ${name}`);
  callBack();
};

/* 
function callBack() {
  console.log(`I am a callback function`);
}
greetings("David", callBack);
*/

greetings("David", function callBack() {
  console.log(`I am a callback function`);
});