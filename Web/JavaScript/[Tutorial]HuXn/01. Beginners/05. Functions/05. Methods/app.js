/*
  function greeting (){
    return `Hello, my name is ${person.name} and I am ${person.age} years old.`
  }
  const person = {
    name : 'David',
    age : 20,
    greeting, // Pass the Method ont the Object
  }
  console.log(person.greeting());
*/

const person = {
  name: 'David',
  age: 20,
  greeting: function () {
    return `Hello, my name is ${person.name} and I am ${person.age} years old.`;
  },
};
console.log(person.greeting());