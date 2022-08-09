<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royan 2K22</title>
    <link rel="stylesheet" href="css/styleLogged.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="image/ressources/curseur.png" rel="icon">
</head>
<header>
    
</header>
<body>
    
    

    <img src="image/ressources/Jager_bg.svg" class="logo">

    <img src="image/ressources/Jager_bg.svg" class="img-first">

    <!-- <ul class="medias">
        <li><h4>Participants<br>actuels</h4></li>
        <li class="bulle"><img src="image/ressources/sale gueule/Vic.png" class="logo-medias"></li>
        <li class="bulle"><img src="image/ressources/sale gueule/Matt.png" class="logo-medias"></li>
        <li class="bulle"><img src="image/ressources/sale gueule/Hugz.png" class="logo-medias"></li>
        <li class="bulle"><img src="image/ressources/sale gueule/Gaet.png" class="logo-medias"></li>
    </ul> -->

    <nav>
        <a href="https://royan2022.carrd.co/#preview">Preview</a>
        <a href="#">Dates</a>
        <a href="#">Participer</a>
        <a href="#">Le groupe</a>
        <a href="#">Les quêtes</a>
        <a href="#">l'histoire</a>
        <a href="#">Pro Tips</a>
    </nav>
    <div class="container-first">
        <h1 class="welcome"><span>Welcome </span><span>to</span><br><span>Royan 2K22 </span></h1>
    </div>  
    <button type="button" aria-label="toggle curtain navigation"
    class="nav-toggler">
        <span class="line l1"></span>
        <span class="line l2"></span>
        <span class="line l3"></span>
    </button>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="js/appLogged.js"></script>
</body>
</html> 