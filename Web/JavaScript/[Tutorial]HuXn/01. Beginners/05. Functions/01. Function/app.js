function greet() {
    console.log('Hello, World from Function!');
};
// Call the function
greet();


// Function with parameters
function sayHello (name){
  console.log(`Hello, ${name}`);
  console.log("Hello, " + name);
};
// Call the function
sayHello('David');


// Function with return value 
function add (x, y) {
  return x + y;
};
// Call the function
const result = add(10, 20);
console.log(result);