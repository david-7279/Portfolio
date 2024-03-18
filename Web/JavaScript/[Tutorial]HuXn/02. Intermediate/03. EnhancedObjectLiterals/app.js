/* 
  Enhanced object literals, introduced in ECMAScript 6 (ES6),
  are a set of enhancements to the syntax for defining objects in JavaScript.
  These enhancements make it more convenient and concise to define object properties and methods.
*/

function user(name, age, work) {
  return {
    name,
    age,
    work,
    info: () => {
      return `My name is ${name} and I'm ${age} years old, and I'm a ${work}`;
    }
  };
}

const user1 = user('David', 20, 'Student');
console.log(user1.info());