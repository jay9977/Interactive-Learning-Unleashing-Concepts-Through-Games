<?php
session_start();
if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true)
{
    header('Location: login.php'); 
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>🧠 Memory Game in JavaScript</title>

        <link rel="stylesheet" href="css/styles_memory_flow.css" />
        <script src="js/game.js" defer></script>
    </head>
    <body>
        <ul>
          <button class="help">HELP?</button> 
          <li><a href="main.php"><button  class="back">BACK</button></a></li>
        </ul>
        <div class="game">
            <div class="controls">
                <button>Start</button>
                <div class="stats">
                    <div class="moves">0 moves</div>
                    <div class="timer">time: 0 sec</div>
                </div>
            </div>
            <div class="board-container">
                <div class="board" data-dimension="4"></div>
                <div class="win">You won!</div>
            </div>
        </div>
    </body>
</html>