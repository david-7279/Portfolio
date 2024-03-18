setInterval(() => console.log(`This is a message that will be printed every 3 seconds`), 3000);

setTimeout(function (){
  console.log(`This is a message will be executed after 3 seconds`);
}, 3000);

const intervalId = setInterval(function() {
  console.log(`This is a message will be printed at the interval of 1 second`);
}, 1000);

setTimeout( function() {
  clearInterval(intervalId);
  console.log(`The interval has been cleared`);
}, 3000);