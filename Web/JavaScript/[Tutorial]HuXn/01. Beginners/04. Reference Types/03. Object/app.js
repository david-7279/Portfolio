const person = {
  firstName: 'David',
  lastName: 'Vieira',
  age: 20,
  hobbies: ['reading', 'coding', 'music'],
};

console.log("Object: ", person);
console.log("First item on the object:  ", person.firstName);
console.log("Second item on the object: ", person['lastName']);
console.log("Third item on the object:  ", person.age);
console.log("Fourth item on the object: ", person.hobbies);

delete person.age;
console.log("Object after delete one item: ", person);