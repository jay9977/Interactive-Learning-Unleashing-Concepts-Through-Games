<?php
session_start();
if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true)
{
    header('Location: login.php'); 
    exit;
}
?>
<!DOCTYPE html>
<html>
  <head lang="en">
  <meta charset="utf-8">
  <title>
  Spell the bee
  </title>
  <link rel="stylesheet" href="css/style_spell_the_bee.css">
 </head>
 <body>
        <ul>
           <button class="help">HELP?</button>
           <a href="main.php"><button  class="back">BACK</button></a>
        </ul>

     <div id="container">
         <div id="trials"></div>
         <div id="score">Score : <span id="scorevalue">0</span></div>
         <div id="fruitscontainer">
        <audio controls id="audiotag">
                  <source type="audio/mp3" src="">
        </audio>
         </div>
         <div id="instruction">Guess the letter</div>
         <input type="text" id="ans" name="ans">
         <button id="submit">Submit</button>
         <button id="reset">Start Game</button>
         <div id="time">Time remaining :<span id="timevalue">0 sec</span></div>
         <div id="gameover">
             <p>game over!</p>
             <p>your game score :<span id="gamescore">0</span></p>
         </div>
     </div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="jquery_spell_the_bee.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js">
  </script>
 </body> 