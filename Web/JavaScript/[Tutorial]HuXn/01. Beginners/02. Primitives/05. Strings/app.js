let firstName = "David";
let lastName = "Vieira";
// console.log(fullName);

// 1. Concatenation
let fullName = firstName + " " + lastName
// let fullName = firstName.concat(lastName);

// 2. Append
firstName += " Soares "
console.log(firstName);

//  3. Length
console.log("Length: ", firstName.length);

// 4. Cases
console.log("UpperCase: ", firstName.toUpperCase());
console.log("LowerCase: ", firstName.toLowerCase());

// 5. Slice
console.log("Slice: ", fullName.slice(0, 3));

// 6. Split and Join
console.log(fullName.split(" ").join(","));

// 7. Includes
console.log("Include: ", fullName.includes("d"));

// 8. Trim
console.log("Trim: ", fullName.trim());