<?php 
// require_once "function.php";

/* 
ecrire le mot de pass . 
veri ier le mot de pass 
max 3 tentatives 
redirection vers des nouvelles pages
*/

/**
 * Fonction pour nettoyer et sécuriser le nom de l'interlocuteur
 */
function preparerNomInterlocuteur($nomBrut) {
    // Supprime les espaces superflus au début et à la fin
    $nomNettoye = trim($nomBrut);
    
    // Utilisation de htmlentities pour échapper les caractères spéciaux (protection XSS)
    return htmlentities($nomNettoye, ENT_QUOTES, 'UTF-8');
}

$nomInterlocuteur = "";

// Vérifie si le formulaire a été soumis via la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['interlocuteur'])) {
    // Appel de la fonction de sécurisation
    $nomInterlocuteur = preparerNomInterlocuteur($_POST['interlocuteur']);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Espace de Discussion</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        form { margin-bottom: 20px; }
        label { display: block; margin-bottom: 8px; font-weight: bold; }
        input[type="text"] { padding: 8px; width: 300px; margin-right: 10px; }
        button { padding: 8px 15px; background-color: #007BFF; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #0056b3; }
        .chat-box { background: #f9f9f9; padding: 15px; border-left: 4px solid #007BFF; }
    </style>
</head>
<body>

    <h2>Déclarer l'interlocuteur</h2>

    <!-- Formulaire pour saisir le nom -->
    <form method="POST" action="">
        <label for="interlocuteur">Nom de la personne avec qui dialoguer :</label>
        <input type="text" id="interlocuteur" name="interlocuteur" placeholder="Ex: Alice" required>
        <button type="submit">Commencer le chat</button>
    </form>

    <!-- Affichage dynamique après soumission -->
    <?php if (!empty($nomInterlocuteur)): ?>
        <div class="chat-box">
            <h3>Salon de discussion</h3>
            <p>Vous êtes maintenant connecté pour dialoguer avec : <strong><?php echo $nomInterlocuteur; ?></strong></p>
        </div>
    <?php endif; ?>

</body>
</html>