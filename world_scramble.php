
<?php
session_start();
if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true)
{
    header('Location: login.php'); 
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Jumble World Game </title>
    <link rel="stylesheet" href="css/style_world_scramble.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/words.js" defer></script>
    <script src="js/script.js" defer></script>
  </head>
  <body>
    <div class="container">
        <h2>Jumble World</h2>
        <div class="score">Score : <span id="scorevalue">0</span></div>
        <div class="content">
            <p class="word"></p>
            <div class="details">
                <p class="hint">Hint: <span></span></p>
                <p class="time">Time Left: <span><b>30</b>s</span></p>
            </div>
            <input type="text" spellcheck="false" placeholder="Enter a valid word">
            <div class="buttons">
                <button class="refresh-word">Refresh Word</button>
                <button class="check-word">Check Word</button>
                <button class="reset">Reset Game</button>
            </div>
        </div>
    </div>
  </body>
</html>