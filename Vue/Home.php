<?php ob_start(); ?>

<h2 class="msgDeBienvenue"> Bienvenue sur Equilibra</h2>
<div class=" firstMsgDaccueilUser">
    <img src="./Tools/image/illustration-accueil.webp" class="imgAccueil">
    <p class="msgDaccueilUser"> Être en forme n'as jamais été aussi facile!! </p>
</div>
<div class="secondMsgDaccueilUser">
    <form>
        <p class="msgDaccueilUser2"> Vous avez déjà utilisé notre app</P>
        <a href="./index.php?action=displayLogin" type="submit" name="log-in">Se connecter</a>

        <p class="msgDaccueilUser2"> Vous n'êtes pas encore inscrit </p>
        <a href="./index.php?action=displaySignup" name="sign-up">Inscrivez-vous</a>
    </form>
</div>

<?php $logout = '' ?>
<?php $title = 'Home' ?>
<?php $style = './Tools/style/Home.css' ?>
<?php $contenu = ob_get_clean(); ?>
<?php require 'Template.php'; ?>