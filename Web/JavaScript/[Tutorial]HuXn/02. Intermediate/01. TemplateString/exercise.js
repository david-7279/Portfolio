// 1. Store this in template string
// The quick
// brown fox
// jumps over
// the lazy dog

// 2. Create two variables (firstName, lastName)
// 3. Use that variables in template string.

const firstName = 'David';
const lastName = 'Vieira';

const text = `
The quick
brown fox
jumps over
the lazy dog
`;

function templateString() {
  return `${text}My name is ${firstName} ${lastName},`;
}

console.log(`${templateString()}`);