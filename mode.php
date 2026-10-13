<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec Mode Nuit / Sombre</title>
    <style>
        /* Définition des variables de couleurs pour les différents modes */
        :root {
            --bg-color: #f4f4f9;
            --text-color: #333333;
            --form-bg: #ffffff;
            --input-bg: #ffffff;
            --input-border: #cccccc;
            --btn-bg: #007bff;
            --btn-text: #ffffff;
        }

        /* Variables appliquées lorsque la classe 'dark-mode' est active sur la balise <html> */
        html.dark-mode {
            --bg-color: #121212;
            --text-color: #e0e0e0;
            --form-bg: #1e1e1e;
            --input-bg: #2d2d2d;
            --input-border: #444444;
            --btn-bg: #bb86fc;
            --btn-text: #121212;
        }

        /* Styles généraux */
        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Style du conteneur du formulaire */
        .form-container {
            background-color: var(--form-bg);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            position: relative;
            transition: background-color 0.3s ease;
        }

        h2 {
            margin-top: 0;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            background-color: var(--input-bg);
            color: var(--text-color);
            border: 1px solid var(--input-border);
            border-radius: 4px;
            box-sizing: border-box;
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
        }

        button.submit-btn {
            background-color: var(--btn-bg);
            color: var(--btn-text);
            border: none;
            padding: 10px 15px;
            width: 100%;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        button.submit-btn:hover {
            opacity: 0.9;
        }

        /* Style du bouton de bascule (Toggle) */
        .toggle-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background: none;
            border: 2px solid var(--text-color);
            color: var(--text-color);
            padding: 5px 10px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 12px;
            transition: all 0.3s ease;
        }

        .toggle-btn:hover {
            background-color: var(--text-color);
            color: var(--bg-color);
        }

        /* Alerte de traitement PHP */
        .alert {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
            font-size: 13px;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <!-- Bouton pour changer de mode -->
        <button class="toggle-btn" id="themeToggle">Mode Nuit 🌙</button>

        <h2>Contact</h2>

        <!-- Petit traitement PHP basique lors de la soumission du formulaire -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom = htmlspecialchars($_POST['nom']);
            echo '<div class="alert">Merci ' . $nom . ', message bien reçu !</div>';
        }
        ?>

        <!-- Formulaire HTML -->
        <form action="" method="POST">
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail :</label>
                <input type="email" id="email" name="email" required>
            </div>

            <button type="submit" class="submit-btn">Envoyer</button>
        </form>
    </div>

    <!-- Script JavaScript gérant le mode nuit / sombre -->
    <script>
        const toggleBtn = document.getElementById('themeToggle');
        const htmlElement = document.documentElement;

        // 1. Vérifier si un mode était déjà enregistré dans le navigateur
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme === 'dark') {
            htmlElement.classList.add('dark-mode');
            toggleBtn.textContent = 'Mode Jour ☀️';
        }

        // 2. Écouter le clic sur le bouton pour basculer de mode
        toggleBtn.addEventListener('click', () => {
            htmlElement.classList.toggle('dark-mode');

            // Mettre à jour le texte du bouton et sauvegarder la préférence
            if (htmlElement.classList.contains('dark-mode')) {
                localStorage.setItem('theme', 'dark');
                toggleBtn.textContent = 'Mode Jour ☀️';
            } else {
                localStorage.setItem('theme', 'light');
                toggleBtn.textContent = 'Mode Nuit 🌙';
            }
        });
    </script>
</body>
</html>