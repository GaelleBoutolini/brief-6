<?php ob_start(); ?>
<main>
    <div class="container">

        <form method="post" action="./index.php?action=login">
            <h2>Connexion</h2>
            <div>
                <label for="identifiant">Identifiant</label>
                <input type="email" id="identifiant" name="identifiant" required>
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>
            <p><?php $erreurConnexion ?></p>
            <input id="form-btn" type="submit" value="Connexion">
        </form>
    </div>
    <p>Vous n'êtes pas encore inscrit ? <a href="./index.php?action=displaySignup">Inscrivez&#8209;vous&nbsp;!</a></p>
</main>

<?php $title = 'Connexion - Equilibra' ?>
<?php $style = './Tools/style/Form.css'; ?>
<?php $contenu = ob_get_clean(); ?>
<?php require 'Template.php'; ?>