// GLOBAL VARIABLES
var guess; // number guessed by player
var guessSelected = false; // check if guess selected before roll
var roll; // die roll value
var SIDES = 6; // sides on die
var MIN = 1; // min value of die
var score = 500; // starting score
var bet; // amount of bet -- must be above 0 and cannot be more than score
var showRules = false;


// LISTENERS
window.onload = startGame();

$(".number").click(function(){
  guess = $(this).attr("id");
  guessSelected = true;
  $(this).attr("class", "btn btn-danger");
  disableButtons();
});

$(".replayBtn").on("click", function() {
  location.reload();
});

$(".betSubmit").on("click", function() {
  // set bet amount
  bet = parseInt(betField.value);
  if(betIsValid()){
    if(guessSelected) {
    // generates number representing die roll
    generateNum();
    // display correct die image
    showDie();
    // call checkGuess
    checkGuess();
    checkGameOver();
    resetPlayArea(); // enables guess buttons and resets bet to 0
      }
    else {
      alert("Select your guess before rolling.");
    }
  }
  else{
    alert("Invalid bet amount.");
  }

});

$(".ruleBtn").click(function() {
  showRules = !showRules;
  if (showRules){
    $('#rules').show();
  }
  else {
    $('#rules').hide();
  }
});

// FUNCTIONS

// runs on window load
function startGame()
{
  betField.focus(); // put cursor in betField 
  createNumButtons(); // create die guess buttons
  updateScore(); // put starting score on screen
}

// create the number buttons iteratively
function createNumButtons()
{
  $("#numbers").empty();
  for(var number = 1; number <= SIDES; number++)
    {
      $("#numbers").append("<button type= 'button' class='number btn btn-dark' id='" + number + "'>" + number + "</button> ");
    }
}

// disable buttons when a guess is clicked
function disableButtons()
{
  $(':button').prop('disabled', true); 
 
}

// enable buttons for next play session
function enableButtons()
{
  $(':button').prop('disabled', false); 
  $(':button').attr("class", "btn btn-secondary");
}

// generate a number for the die roll
function generateNum()
{
  roll = Math.floor(Math.random() * SIDES - MIN + 1) + 1;
}

function showDie()
{
  $("#dieRoll").attr("src", "img/die_" + roll + ".png");
}

// increase score if correct; decrease if incorrect
function checkGuess()
{
  if(guess == roll)
    {
      score += bet;
    }
  else
    {
      score -= bet;
    }
  updateScore();
}

// checks if bet isn't more than score and isn't negative
function betIsValid()
{
  return bet <= score && bet > 0;
}


// writes current score to screen
function updateScore()
{
  $("#currentScore").empty();
  $("#currentScore").append(score);
}

// resets guessSelected value, enables all buttons, and refocuses on betField with 0 bet
function resetPlayArea()
{
  guessSelected = false;
  enableButtons();
  betField.focus();
  betField.value = 0; 
}

function checkGameOver()
{
  if(score <= 0)
    {
       $("#playArea").hide();
       $('#lost').show();
    }
  else if(score >= 1000)
    {
      $("#playArea").hide();
       $('#won').show();
    }
}
