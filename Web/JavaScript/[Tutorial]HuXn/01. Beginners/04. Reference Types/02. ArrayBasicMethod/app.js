const fruits = [
  'apple',
  'banana',
  'orange',
  'lemon',
  'pear'
];

console.log("Fruits: ",fruits);
fruits.push('grape'); // Add a new element to the array
console.log("Add new item in the array: ",fruits);
fruits.pop(); // Remove the last element from the array
console.log("Remove the las item in the array: ",fruits);
fruits.shift(); // Remove the first element from the array
console.log("Remove the first item in the array: ",fruits);
fruits.unshift('apple'); // Add a new element to the beginning of the array
console.log("Add new item in the array: ",fruits);

console.log("Include in the array: ",fruits.includes('orange'));
console.log("Join in the array: ", fruits.join('/'));
console.log("Reverse the array: ", fruits.reverse());
console.log("Slice the array: ", fruits.slice(0, 3));
console.log("Sort the array: ", fruits.sort());

const newFruits = ['kiwi', 'mango', 'watermelon'];
console.log("Concat the array: ",fruits.concat(newFruits)); // Concatenate two arrays

