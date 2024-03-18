for (let i = 1; i <= 10; i++) {
  console.log("[" + i + "] Hello World");
}

console.log("Nested Loop");

for (let a = 1; a <= 5; a++) {
  console.log("[" + a + "] Outer Loop");
  
  for (let b = 1; b <= 3; b++) {
    console.log("[" + b + "] Inner Loop");
  }
}