<?php
session_start();
if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true)
{

    header('Location: login.php'); 
    exit;
}
$username=$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KidGame</title>
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <header class="header">
    <a class="logo"href="main.html"><img src="img/logo.png" alt="logo"width="150" height="99"/></a>
    <nav class="nav-items">
      <a href="logout.php"><b>Logout</b></a>
    </nav>
  </header>
  <main>
    <div class="intro">
      <h1><?php echo $username ?>! Welcome to World of Gaming</h1>
      <p>★ Enjoy the Learning with Funlearn Games ★</p>
    </div>
    <div class="achievements">
      <div class="work">
        <i class="fa fa-question fa-3x"></i>
        <p class="work-heading"><a href="mathsmania.php">MATHS MANIA</a></p>
      </div>
      <div class="work">
        <i class="fa fa-picture-o fa-3x"></i>
        <p class="work-heading"><a href="memory_flow.php">MEMORY FLOW</a></p>  
      </div>
      <div class="work">
        <i class="fa fa-spinner fa-3x"></i>
        <p class="work-heading"><a href="world_scramble.php">JUMBLE WORLD</a></p>
      </div>
      <div class="work">
        <i class="fa fa-volume-up fa-3x"></i>
        <p class="work-heading"><a href="spell_the_bee.php">SPELL THE BEE</a></p>
      </div>
    </div>

    <div class="about-me">
      <div class="about-me-text">
        <h2>✯ Play To Learn ✯</h2>
        <p>. “It’s not so much what children learn through play, but what they won’t learn if we don’t give them the chance to play. Many functional skills like literacy and arithmetic can be learned either through play or through instruction – the issue is the amount of stress on the child. However, many coping skills like compassion, self-regulation, self-confidence, the habit of active engagement, and the motivation to learn and be literate cannot be instructed. They can only be learned through self-directed experience (i.e. play). – Susan J. Oliver</p>
      </div>
      <img src="img/cde.jpg"alt="">
    </div>
  </main>
  <footer class="footer">
    <div class="copy">@ 2024 Funlearn</div>
    <div class="bottom-links">
      <div class="links">
        <span>More Info</span>
        <a href="index.html">Home</a>
        <a href="about.html">About</a>
        <a href="contact.html">Contact</a>
      </div>
  </footer>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>