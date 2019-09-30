//gets the current date
var today = new Date();
//gets the current hour
var hourNow = today.getHours();
var greeting;
//gets the greeting set in the html
var currentGreeting = document.getElementById('greeting');

//sets the greeting based on the current time
if (hourNow > 18){
  greeting = 'Good evening';
} else if (hourNow > 12) {
  greeting = 'Good afternoon'
} else if (hourNow > 0) {
  greeting = 'Good morning'
} else {
  greeting = 'Hello'
}

//updates the welcome message with the correct greeting
currentGreeting.textContent = greeting;
