<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royan 2K22</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="image/ressources/curseur.png" rel="icon">
</head>
<header>
    
</header>
<body>
    
    <div class="container-first">
        <h1><span>Welcome </span><span>to</span><br><span>Royan 2K22 </span></h1>
        <div class="container-btns">
                <form action="config.php" method="post">
                <input type="text" name="username" class="btn-first b1" placeholder = "Nom">
                <input type="password" name="password" class="btn-first b2" placeholder = "MDP">
                <button class="btn-first b3" type="submit" >Connexion</button>
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p class='wrong_psw'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </div>

    <img src="image/ressources/Jager_bg.svg" class="logo">
      
</body>
</html> 