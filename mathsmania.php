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
  Quiz game/home
  </title>
  <link rel="stylesheet" href="css/stylehome_mathsmania.css">
  <script src="js/maths.js" defer></script>
 </head>
 <body>
     <header>
         <div class="head2">
            <ul>
                <li> <a href="main.php"><button  class="back">BACK</button></a></li>
                <li> <button class="help">HELP ?</button></li>
            </ul>
        </div>
         <div id="name">Maths mania game </div>
     </header>
     <div id="container">
     <div id="topics">
         <div id="topic">Topics :</div>
         <div class="choice" id="add"><a href="addition.php">Addition</a></div>
         <div class="choice" id="sub"><a href="subtraction.php">Subtraction</a></div>
         <div class="choice" id="mul"><a href="multiplication.php">Multiplication</a></div>
         <div class="choice" id="dive"><a href="division.php">Division</a></div>
    </div>
     </div>
     <footer>@copyright develope with Funlearn
     </footer>
<script>
        function featur_btn() {
        alert("I am an alert box!");
        }
</script>
 </body>
</html>