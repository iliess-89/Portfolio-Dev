<?php

if (!empty($_POST)) {
    
    if (
        isset($_POST["name"], $_POST["first"], $_POST["email"], $_POST["topic"], $_POST["message"])
        && !empty($_POST["name"])
        && !empty($_POST["first"])
        && !empty($_POST["email"])
        && !empty($_POST["topic"])
        && !empty($_POST["message"])
        
        ) {
            
            $name = strip_tags($_POST["name"]);
            $first = strip_tags($_POST["first"]);
            $topic = strip_tags($_POST["topic"]);
            $email = strip_tags($_POST["email"]);
            // on neutralise les balise
            $message = htmlspecialchars($_POST["message"]);
            
            // var_dump(array($name, $first, $topic, $email, $message));

            
            // Valider l'email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "L'adresse e-mail n'est pas valide";
                
                } else {

            require_once "includes/connexionB.php";
            $sql = "INSERT INTO `contact` (`nom`, `prenom`, `email`, `sujet`, `message`) VALUES (:name, :first, :mail, :sujet, :message);";
        
            $query = $db->prepare($sql);
            
            $query->bindValue(":name", $name, PDO::PARAM_STR);
            $query->bindValue(":first", $first, PDO::PARAM_STR);
            $query->bindValue(":mail", $_POST["email"]);
            $query->bindValue(":sujet", $topic, PDO::PARAM_STR);
            $query->bindValue(":message", $message, PDO::PARAM_STR);
            
            $query->execute();

            header("Location: contact.php");
            
            
                    }
                    
        } else {
        die("le formulaire est incomplet");
    }
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/LogoW.png"/>
    <meta name="description" content="Je vous propose de découvrit mon Portfolio(IM) dans l'univers du japon. Designer web, Developpeur Web, Création de maquette, Logo, Intégration de site web">
    <link rel="stylesheet" href="css/contact.css">
    <script src="js/contact.js" defer></script>
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet"> 
</head>
<body>
    
    <header>
        <figure>
            <a href="index.html"><img src="img/LogoW.png" alt="Mon logo"></a>
        </figure>

        <nav class="burger">
            <div>
                <span></span>
            </div>

            <section class="content">
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="presentation.html">Présentation</a></li>
                    <li><a href="competences.html">Compétences</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </section>
        </nav>
    </header>
    <main>

        <section class="content-top">
            <article class="japon">
            <h1>CONTACT</h1>
            </article>
        </section>
    
        <section class="social">
            <a href="https://www.linkedin.com/in/iliess-mazouari-966595215/"><img src="img/linkedin.png" alt="linkedin"></a>
            <article>
                <a href="https://www.facebook.com/profile.php?id=100078875082843"><img src="img/facebook.png" class="facebook" alt="facebook"></a>
                <a href="https://github.com/iliess-89"><img src="img/github.png" alt="github"></a>
            </article>

            <figure>
                <img src="img/character.png" alt="personnage jeux">
            </figure>
        </section>

        <section class="formulaire">
            <figure>
                <img src="img/japon.jpg" alt="image du japon">
            </figure>

            <form action="" method="POST">

                <div class="name">
                    <div>
                    <label for="nom">Nom</label>
                    <div id="messageN"></div>
                    <input type="text" name="name" id="name">
                    </div>
                    <div>
                        <label for="prenom">Prenom</label>
                        <div id="messageP"></div>
                        <input type="text" name="first" id="prenom">
                    </div>
                </div>
                    <div>
                    <label for="email">E-mail</label>
                    <div id="message"></div>
                    <input type="text" name="email" id="email">
                </div>
                <div>
                    <label for="sujet">Sujet</label>
                    <div id="messageS"></div>
                    <input type="text" name="topic" id="sujet"> 
                </div>
                <div>
                    <label for="message">Message</label>
                    <div id="messageM"></div>
                    <textarea name="message" id="textarea" ></textarea>
                </div>
                <button>Envoyez</button>
            </form>
        </section>
    </main>
    <footer>
            <section class="reseaux">
             <a href=""><img src="img/facebookW.png" alt="facebook"></a>
             <a href=""><img src="img/linkedinW.png" alt="linkedin"></a>
             <a href=""><img src="img/githubW.png" alt="github"></a>
            </section>

            <section class="mentions">
                <a href="mentions.html">Mentions légales</a>
            </section>
    </footer>
</body>
</html>