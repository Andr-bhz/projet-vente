
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenue sur mon site de fruits </title>
    <link rel="stylesheet" href="style.css">
</head>
<header>
    <a href="#accueil">accueil</a>
    <a href="#A propos ">informations</a>
    <a href="#form">contact</a>
</header>
<body>
   <h1>Les <span>🍎fruits</span></h1> 
    <div>
        <img src="coconut.jpg" alt="image" width="500" height="400" class="image1">
        <p> bonjour et bienvenue sur mon site de fruits nous vus presentons le different types de fruits <br>
    dont sur celui ci nous vous proposons le noix de coco <br>riche en vitamine:D ,<br>vitamine :C <br> et en proteines</p>
    </div>
    <div>
        <img src="banane.jpg" alt="image" width="500" height="400" class="image2">
        <p>la banane est un fruit tropique riche en potassium et en vitamine B6</p>
    </div>
    <div>
        <img src="fraise.jpg" alt="image" width="500" height="400" class="image3">
        <p>la fraise est un fruit riche en vitamine C et en antioxydants</p>
    </div>
    <div>
        <img src="mangue.jpg" alt="image" width="500" height="400" class="image4">
        <p>la mangue est un fruit riche en vitamine A et en fibres</p>
    </div>
    <div>
        <img src="kiwi.jpg" alt="image" width="500" height="400" class="image5">
        <p>le kiwi est un fruit riche en vitamine C et en potassium</p>
    </div>
    <ul>

    </ul>
    <form action="admin.php"class="hope"  method="post" value="">
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" placeholder="votre nom" require>
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="@gmail.com " require>
        </div>
            <label for="prenom" class="form-label">Prenom :</label>
            <input type="text" name="prenom" id="prenom" placeholder="votre prenom"> 
        <div>
            <label for="password">Password:</label>
             <input type="password" name="password" id="password" placeholder="******">
        </div>
    </form>
        <button id="container" type="submit">Envoyer</button>
        <button id="theme-toggle">changer de theme</button>
        
    <script src="script.js"></script>
    <footer>
        <p> whattsaap © 2026 Mon Site de Fruits. Tous droits réservés.</p>
    </footer>
</body>
</html>