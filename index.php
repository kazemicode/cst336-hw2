<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Guess the Die Roll</title>
    <!-- CSS and JS -->
    <link  href="css/styles.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
<body>
  <div class="container text-center">
  <div class="jumbotron"><h1>Guess and Roll!</h1>
    
    <!-- die div contains the image of the die as well as the score display -->
    <div id="die" >
      <div id="scoreDisplay">
      Score: <span id="currentScore"></span>
      </div>
      <img src="img/perspective-dice-six-faces-random.png" id="dieRoll" alt="Result of die roll">
    </div>
    <!-- end die div -->
    
    <!-- playArea div contins the area the player interacts with--guess selection and bet input -->
     <div id="playArea">
       <br><br>
            What number will the 6-sided die land on?
          
          <br><br>
      
          <div id ="numbers"> </div>
          <br><br>
     
          <label for="betField">Place your bet:  </label>
          <input type="number" id="betField" class="betField">
          <input type="submit" value="Roll" class="betSubmit btn btn-dark">
       
          <br><br>   
       </div>
    <!-- end playArea div -->
    
    <!-- Following two divs start out as hidden and either won or lost is displayed at game over -->
     <div id = "won">
          <h2>You won!</h2>
          <button class="replayBtn btn btn-success">Play Again </button>
        </div>
        
    <div id = "lost">
      <h2>You lost!</h2>
      <button class="replayBtn btn btn-warning">Play Again </button>
    </div>
    <!-- End won / lost hidden divs -->
    
    <!-- ruleContainer contains a hidden collapsable div and a button that toggles its visibility -->
     <div class="container text-left" id="ruleContainer">  
     <div class="collapse multi-collapse alert alert-info"  id="rules">
       <b>Rules</b>:
      The bet must be a positive number and cannot exceed your current score. 
      You must select your guess and place your bet before you can roll.
      If your score falls to zero, you lose. Once your score reaches or
      exceeds 1000, you win!
      </div> 
       <a class="ruleBtn btn btn-secondary" data-toggle="collapse" href="#rules" role="button" aria-expanded="false" aria-controls="rules">Toggle Rules </a>
    </div>
    <!-- End ruleContainer -->
    
  </div> <!--End jumbotron -->
 </div> <!--End main container -->
</body>
  
  <!-- Custom JS -->
  <script src="js/dice.js"></script>
</html>