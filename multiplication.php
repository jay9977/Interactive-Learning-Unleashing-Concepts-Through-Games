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
  Quiz game/addition
  </title>
  <link rel="stylesheet" href="css/style_mathsmania.css">
 </head>
 <body>
     <div id="container">
         <div id="score">Score : <span id="scorevalue">0</span></div>
         <div id="right">Correct</div>
         <div id="wrong">Try Again</div>
         <div id="question"></div>
         <div id="instruction">Click on the correct answer</div>
         <div id="choices">
             <button id="box1" class="box"></button>
             <button id="box2" class="box"></button>
             <button id="box3" class="box"></button>
             <button id="box4" class="box"></button>
         </div>
         <div></div>
         <div id="btn">
         <button id="reset">Start Game</button>
         <div id="time">Time remaining :<span id="timevalue">40 sec</span></div>
         </div>
         <div id="gameover">
             <p>game over!</p>
             <p>your game score :<span id="gamescore">0</span></p>
         </div>
     </div>
     <script type="text/javascript" src="js/mul.js"></script>
 </body> 